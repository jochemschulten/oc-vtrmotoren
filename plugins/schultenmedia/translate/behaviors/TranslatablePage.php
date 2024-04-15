<?php namespace SchultenMedia\Translate\Behaviors;

use App;
use SchultenMedia\Translate\Classes\TranslatableBehavior;

/**
 * TranslatablePage model extension
 *
 * Usage:
 *
 * In the model class definition:
 *
 *   public $implement = ['@SchultenMedia.Translate.Behaviors.TranslatablePage'];
 *
 *   public $translatable = ['title', 'description'];
 *
 */
class TranslatablePage extends TranslatableBehavior
{
    /**
     * __construct
     */
    public function __construct($model)
    {
        parent::__construct($model);

        $this->model->bindEvent('model.afterFetch', function() {
            $this->translatableOriginals = $this->getModelAttributes();

            if (!App::runningInBackend()) {
                $this->rewriteTranslatablePageAttributes();
            }
        });
    }

    /**
     * isTranslatable
     */
    public function isTranslatable($key)
    {
        if ($key === 'translatable' || $this->translatableDefault == $this->translatableContext) {
            return false;
        }

        return in_array($key, $this->model->translatable);
    }

    /**
     * getTranslatableAttributes
     */
    public function getTranslatableAttributes()
    {
        $attributes = [];

        foreach ($this->model->translatable as $attr) {
            $attributes[] = 'settings['.$attr.']';
        }

        return $attributes;
    }

    /**
     * getModelAttributes
     */
    public function getModelAttributes()
    {
        $attributes = [];

        foreach ($this->model->translatable as $attr) {
            $attributes[$attr] = $this->model[$attr];
        }

        return $attributes;
    }

    /**
     * initTranslatableContext
     */
    public function initTranslatableContext()
    {
        parent::initTranslatableContext();
        $this->translatableOriginals = $this->getModelAttributes();
    }

    /**
     * rewriteTranslatablePageAttributes
     */
    public function rewriteTranslatablePageAttributes($locale = null)
    {
        $locale = $locale ?: $this->translatableContext;

        foreach ($this->model->translatable as $attr) {
            $localeAttr = $this->translatableOriginals[$attr];

            if ($locale != $this->translatableDefault) {
                $translated = $this->getAttributeTranslated($attr, $locale);
                $localeAttr = ($translated ?: $this->translatableUseFallback) ? $localeAttr : null;
            }

            $this->model[$attr] = $localeAttr;
        }
    }

    /**
     * getAttributeTranslated
     */
    public function getAttributeTranslated($key, $locale = null)
    {
        $locale = $locale ?: $this->translatableContext;

        if (strpbrk($key, '[]') !== false) {
            // Retrieve attr name within brackets (i.e. settings[title] yields title)
            $key = preg_split("/[\[\]]/", $key)[1];
        }

        $default = ($locale == $this->translatableDefault || $this->translatableUseFallback)
            ? array_get($this->translatableOriginals, $key)
            : '';

        $localeAttr = sprintf('viewBag.locale%s.%s', ucfirst($key), $locale);
        return array_get($this->model->attributes, $localeAttr, $default);
    }

    /**
     * setAttributeTranslated
     */
    public function setAttributeTranslated($key, $value, $locale = null)
    {
        $locale = $locale ?: $this->translatableContext;

        if ($locale == $this->translatableDefault) {
            return;
        }

        // Retrieve attr name within brackets (i.e. settings[title] yields title)
        if (strpbrk($key, '[]') !== false) {
            $key = preg_split("/[\[\]]/", $key)[1];
        }

        if ($value == array_get($this->translatableOriginals, $key)) {
            return;
        }

        $this->saveTranslation($key, $value, $locale);
        $this->model->bindEventOnce('model.beforeSave', function() use ($key, $value, $locale) {
            $this->saveTranslation($key, $value, $locale);
        });
    }

    /**
     * saveTranslation
     */
    public function saveTranslation($key, $value, $locale)
    {
        $localeAttr = sprintf('viewBag.locale%s.%s', ucfirst($key), $locale);
        if (!$value) {
            array_forget($this->model->attributes, $localeAttr);
        }
        else {
            array_set($this->model->attributes, $localeAttr, $value);
        }
    }

    /**
     * storeTranslatableData satifies the interface
     */
    protected function storeTranslatableData($locale = null) {}

    /**
     * loadTranslatableData satifies the interface
     */
    protected function loadTranslatableData($locale = null) {}
}