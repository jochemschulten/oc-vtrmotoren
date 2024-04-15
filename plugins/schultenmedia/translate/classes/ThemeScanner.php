<?php namespace SchultenMedia\Translate\Classes;

use Cms\Classes\Page;
use Cms\Classes\Theme;
use Cms\Classes\Layout;
use Cms\Classes\Partial;
use SchultenMedia\Translate\Models\Message;
use System\Models\MailTemplate;
use Exception;
use Event;

/**
 * ThemeScanner class
 *
 * @package schultenmedia\translate
 * @author Alexey Bobkov, Samuel Georges
 */
class ThemeScanner
{
    /**
     * scan is a helper method for scanForMessages()
     */
    public static function scan()
    {
        $obj = new static;

        $obj->scanForMessages();

        /**
         * @event schultenmedia.translate.themeScanner.afterScan
         * Fires after theme scanning.
         *
         * Example usage:
         *
         *     Event::listen('schultenmedia.translate.themeScanner.afterScan', function (ThemeScanner $scanner) {
         *         // added an extra scan. Add generation files...
         *     });
         *
         */
        Event::fire('schultenmedia.translate.themeScanner.afterScan', [$obj]);
    }

    /**
     * scanForMessages in theme templates and config.
     */
    public function scanForMessages()
    {
        $this->scanThemeConfigForMessages();
        $this->scanThemeTemplatesForMessages();
        $this->scanMailTemplatesForMessages();
    }

    /**
     * Scans the theme configuration for defined messages
     * @return void
     */
    public function scanThemeConfigForMessages($themeCode = null)
    {
        if (!$themeCode) {
            $theme = Theme::getActiveTheme();

            if (!$theme) {
                return;
            }
        }
        else {
            if (!Theme::exists($themeCode)) {
                return;
            }

            $theme = Theme::load($themeCode);
        }

        // Parent theme support
        if ($theme->hasParentTheme()) {
            $parentTheme = $theme->getParentTheme();

            try {
                if (!$this->scanThemeConfigForMessagesInternal($theme)) {
                    $this->scanThemeConfigForMessagesInternal($parentTheme);
                }
            }
            catch (Exception $ex) {
                $this->scanThemeConfigForMessagesInternal($parentTheme);
            }
        }
        else {
            $this->scanThemeConfigForMessagesInternal($theme);
        }
    }

    /**
     * scanThemeConfigForMessagesInternal
     */
    protected function scanThemeConfigForMessagesInternal(Theme $theme)
    {
        $config = $theme->getConfigArray('translate');

        if (!count($config)) {
            return false;
        }

        foreach ($config as $locale => $messages) {
            // Config references an external yaml file
            if (is_string($messages)) {
                $messages = $theme->getConfigArray('translate.'.$locale);
            }

            if (is_array($messages)) {
                (new Message)->updateMessages($locale, $messages);
            }
        }
    }

    /**
     * Scans the theme templates for message references.
     * @return void
     */
    public function scanThemeTemplatesForMessages()
    {
        $messages = [];

        foreach (Layout::all() as $layout) {
            $messages = array_merge($messages, $this->parseContent($layout->markup));
        }

        foreach (Page::all() as $page) {
            $messages = array_merge($messages, $this->parseContent($page->markup));
        }

        foreach (Partial::all() as $partial) {
            $messages = array_merge($messages, $this->parseContent($partial->markup));
        }

        Message::importMessages($messages);
    }

    /**
     * Scans the mail templates for message references.
     * @return void
     */
    public function scanMailTemplatesForMessages()
    {
        $messages = [];

        foreach (MailTemplate::allTemplates() as $mailTemplate) {
            $messages = array_merge($messages, $this->parseContent($mailTemplate->subject));
            $messages = array_merge($messages, $this->parseContent($mailTemplate->content_html));
        }

        Message::importMessages($messages);
    }

    /**
     * Parse the known language tag types in to messages.
     * @param  string $content
     * @return array
     */
    protected function parseContent($content)
    {
        $messages = [];
        $messages = array_merge($messages, $this->processStandardTags($content));

        return $messages;
    }

    /**
     * Process standard language filter tag (_|)
     * @param  string $content
     * @return array
     */
    protected function processStandardTags($content)
    {
        $messages = [];

        /*
         * Regex used:
         *
         * {{'AJAX framework'|_}}
         * {{\s*'([^'])+'\s*[|]\s*_\s*}}
         *
         * {{'AJAX framework'|_(variables)}}
         * {{\s*'([^'])+'\s*[|]\s*_\s*\([^\)]+\)\s*}}
         */

        $quoteChar = preg_quote("'");

        preg_match_all('#{{\s*'.$quoteChar.'([^'.$quoteChar.']+)'.$quoteChar.'\s*[|]\s*_\s*(?:[|].+)?}}#', $content, $match);
        if (isset($match[1])) {
            $messages = array_merge($messages, $match[1]);
        }

        preg_match_all('#{{\s*'.$quoteChar.'([^'.$quoteChar.']+)'.$quoteChar.'\s*[|]\s*_\s*\([^\)]+\)\s*}}#', $content, $match);
        if (isset($match[1])) {
            $messages = array_merge($messages, $match[1]);
        }

        $quoteChar = preg_quote('"');

        preg_match_all('#{{\s*'.$quoteChar.'([^'.$quoteChar.']+)'.$quoteChar.'\s*[|]\s*_\s*(?:[|].+)?}}#', $content, $match);
        if (isset($match[1])) {
            $messages = array_merge($messages, $match[1]);
        }

        preg_match_all('#{{\s*'.$quoteChar.'([^'.$quoteChar.']+)'.$quoteChar.'\s*[|]\s*_\s*\([^\)]+\)\s*}}#', $content, $match);
        if (isset($match[1])) {
            $messages = array_merge($messages, $match[1]);
        }

        return $messages;
    }
}