<?php
/**
 * 2007-2016 PrestaShop
 *
 * Thirty Bees is an extension to the PrestaShop e-commerce software developed by PrestaShop SA
 * Copyright (C) 2017 Thirty Bees
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@thirtybees.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.thirtybees.com for more information.
 *
 * @author    Thirty Bees <contact@thirtybees.com>
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2017 Thirty Bees
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *  PrestaShop is an internationally registered trademark & property of PrestaShop SA
 */
use CssSplitter\Splitter;

/**
 * Class MediaCore
 *
 * @since 1.0.0
 */
class MediaCore
{
    // @codingStandardsIgnoreStart
    public static $jquery_ui_dependencies = [
        'ui.core'           => ['fileName' => 'jquery.ui.core.min.js', 'dependencies' => [], 'theme' => true],
        'ui.widget'         => ['fileName' => 'jquery.ui.widget.min.js', 'dependencies' => [], 'theme' => false],
        'ui.mouse'          => ['fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => ['ui.core', 'ui.widget'], 'theme' => false],
        'ui.position'       => ['fileName' => 'jquery.ui.position.min.js', 'dependencies' => [], 'theme' => false],
        'ui.draggable'      => ['fileName' => 'jquery.ui.draggable.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.mouse'], 'theme' => false],
        'ui.droppable'      => ['fileName' => 'jquery.ui.droppable.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.mouse', 'ui.draggable'], 'theme' => false],
        'ui.resizable'      => ['fileName' => 'jquery.ui.resizable.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.mouse'], 'theme' => true],
        'ui.selectable'     => ['fileName' => 'jquery.ui.selectable.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.mouse'], 'theme' => true],
        'ui.sortable'       => ['fileName' => 'jquery.ui.sortable.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.mouse'], 'theme' => true],
        'ui.autocomplete'   => ['fileName' => 'jquery.ui.autocomplete.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.position', 'ui.menu'], 'theme' => true],
        'ui.button'         => ['fileName' => 'jquery.ui.button.min.js', 'dependencies' => ['ui.core', 'ui.widget'], 'theme' => true],
        'ui.dialog'         => ['fileName' => 'jquery.ui.dialog.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.position', 'ui.button'], 'theme' => true],
        'ui.menu'           => ['fileName' => 'jquery.ui.menu.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.position'], 'theme' => true],
        'ui.slider'         => ['fileName' => 'jquery.ui.slider.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.mouse'], 'theme' => true],
        'ui.spinner'        => ['fileName' => 'jquery.ui.spinner.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.button'], 'theme' => true],
        'ui.tabs'           => ['fileName' => 'jquery.ui.tabs.min.js', 'dependencies' => ['ui.core', 'ui.widget'], 'theme' => true],
        'ui.datepicker'     => ['fileName' => 'jquery.ui.datepicker.min.js', 'dependencies' => ['ui.core'], 'theme' => true],
        'ui.progressbar'    => ['fileName' => 'jquery.ui.progressbar.min.js', 'dependencies' => ['ui.core', 'ui.widget'], 'theme' => true],
        'ui.tooltip'        => ['fileName' => 'jquery.ui.tooltip.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'ui.position', 'effects.core'], 'theme' => true],
        'ui.accordion'      => ['fileName' => 'jquery.ui.accordion.min.js', 'dependencies' => ['ui.core', 'ui.widget', 'effects.core'], 'theme' => true],
        'effects.core'      => ['fileName' => 'jquery.effects.core.min.js', 'dependencies' => [], 'theme' => false],
        'effects.blind'     => ['fileName' => 'jquery.effects.blind.min.js', 'dependencies' => ['effects.core'], 'theme' => false],
        'effects.bounce'    => ['fileName' => 'jquery.effects.bounce.min.js', 'dependencies' => ['effects.core'], 'theme' => false],
        'effects.clip'      => ['fileName' => 'jquery.effects.clip.min.js', 'dependencies' => ['effects.core'], 'theme' => false],
        'effects.drop'      => ['fileName' => 'jquery.effects.drop.min.js', 'dependencies' => ['effects.core'], 'theme' => false],
        'effects.explode'   => ['fileName' => 'jquery.effects.explode.min.js', 'dependencies' => ['effects.core'], 'theme' => false],
        'effects.fade'      => ['fileName' => 'jquery.effects.fade.min.js', 'dependencies' => ['effects.core'], 'theme' => false],
        'effects.fold'      => ['fileName' => 'jquery.effects.fold.min.js', 'dependencies' => ['effects.core'], 'theme' => false],
        'effects.highlight' => ['fileName' => 'jquery.effects.highlight.min.js', 'dependencies' => ['effects.core'], 'theme' => false],
        'effects.pulsate'   => ['fileName' => 'jquery.effects.pulsate.min.js', 'dependencies' => ['effects.core'], 'theme' => false],
        'effects.scale'     => ['fileName' => 'jquery.effects.scale.min.js', 'dependencies' => ['effects.core'], 'theme' => false],
        'effects.shake'     => ['fileName' => 'jquery.effects.shake.min.js', 'dependencies' => ['effects.core'], 'theme' => false],
        'effects.slide'     => ['fileName' => 'jquery.effects.slide.min.js', 'dependencies' => ['effects.core'], 'theme' => false],
        'effects.transfer'  => ['fileName' => 'jquery.effects.transfer.min.js', 'dependencies' => ['effects.core'], 'theme' => false],
    ];
    /**
     * @var string pattern used in replaceByAbsoluteURL
     */
    public static $pattern_callback = '#(url\((?![\'"]?(?:data:|//|https?:))(?:\'|")?)([^\)\'"]*)(?=[\'"]?\))#s';
    /**
     * @var string pattern used in packJSinHTML
     */
    public static $pattern_js = '/(<\s*script(?:\s+[^>]*(?:javascript|src)[^>]*)?\s*>)(.*)(<\s*\/script\s*[^>]*>)/Uims';
    /**
     * @var array list of javascript definitions
     */
    protected static $js_def = [];
    /**
     * @var array list of javascript inline scripts
     */
    protected static $inline_script = [];
    /**
     * @var array list of javascript external scripts
     */
    protected static $inline_script_src = [];
    /**
     * @var string used for preg_replace_callback parameter (avoid global)
     */
    protected static $current_css_file;
    protected static $pattern_keepinline = 'data-keepinline';
    // @codingStandardsIgnoreEnd

    /**
     * @param $htmlContent
     *
     * @return bool|mixed
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function minifyHTML($htmlContent)
    {
        if (strlen($htmlContent) > 0) {
            //set an alphabetical order for args
            // $html_content = preg_replace_callback(
            // '/(<[a-zA-Z0-9]+)((\s*[a-zA-Z0-9]+=[\"\\\'][^\"\\\']*[\"\\\']\s*)*)>/',
            // array('Media', 'minifyHTMLpregCallback'),
            // $html_content,
            // Media::getBackTrackLimit());

            $htmlContent = str_replace(chr(194).chr(160), '&nbsp;', $htmlContent);
            if (trim($minifiedContent = Minify_HTML::minify($htmlContent, ['cssMinifier', 'jsMinifier'])) != '') {
                $htmlContent = $minifiedContent;
            }

            return $htmlContent;
        }

        return false;
    }

    /**
     * @param $pregMatches
     *
     * @return string
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function minifyHTMLpregCallback($pregMatches)
    {
        $args = [];
        preg_match_all('/[a-zA-Z0-9]+=[\"\\\'][^\"\\\']*[\"\\\']/is', $pregMatches[2], $args);
        $args = $args[0];
        sort($args);
        // if there is no args in the balise, we don't write a space (avoid previous : <title >, now : <title>)
        if (empty($args)) {
            $output = $pregMatches[1].'>';
        } else {
            $output = $pregMatches[1].' '.implode(' ', $args).'>';
        }

        return $output;
    }

    /**
     * @param $htmlContent
     *
     * @return bool|mixed
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function packJSinHTML($htmlContent)
    {
        if (strlen($htmlContent) > 0) {
            $htmlContentCopy = $htmlContent;
            if (!preg_match('/'.Media::$pattern_keepinline.'/', $htmlContent)) {
                $htmlContent = preg_replace_callback(
                    Media::$pattern_js,
                    ['Media', 'packJSinHTMLpregCallback'],
                    $htmlContent,
                    Media::getBackTrackLimit()
                );

                // If the string is too big preg_replace return an error
                // In this case, we don't compress the content
                if (function_exists('preg_last_error') && preg_last_error() == PREG_BACKTRACK_LIMIT_ERROR) {
                    if (_PS_MODE_DEV_) {
                        Tools::error_log('ERROR: PREG_BACKTRACK_LIMIT_ERROR in function packJSinHTML');
                    }

                    return $htmlContentCopy;
                }
            }

            return $htmlContent;
        }

        return false;
    }

    /**
     * @return int|null|string
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function getBackTrackLimit()
    {
        static $limit = null;
        if ($limit === null) {
            $limit = @ini_get('pcre.backtrack_limit');
            if (!$limit) {
                $limit = -1;
            }
        }

        return $limit;
    }

    /**
     * @param $pregMatches
     *
     * @return string
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function packJSinHTMLpregCallback($pregMatches)
    {
        if (!(trim($pregMatches[2]))) {
            return $pregMatches[0];
        }
        $pregMatches[1] = $pregMatches[1].'/* <![CDATA[ */';
        $pregMatches[2] = Media::packJS($pregMatches[2]);
        $pregMatches[count($pregMatches) - 1] = '/* ]]> */'.$pregMatches[count($pregMatches) - 1];
        unset($pregMatches[0]);
        $output = implode('', $pregMatches);

        return $output;
    }

    /**
     * @param $jsContent
     *
     * @return string
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function packJS($jsContent)
    {
        if (!empty($jsContent)) {
            try {
                $jsContent = JSMin::minify($jsContent);
            } catch (Exception $e) {
                if (_PS_MODE_DEV_) {
                    echo $e->getMessage();
                }

                return ';'.trim($jsContent, ';').';';
            }
        }

        return ';'.trim($jsContent, ';').';';
    }

    /**
     * @param $matches
     *
     * @return bool|string
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function replaceByAbsoluteURL($matches)
    {
        if (array_key_exists(1, $matches) && array_key_exists(2, $matches)) {
            if (!preg_match('/^(?:https?:)?\/\//iUs', $matches[2])) {
                $protocol_link = Tools::getCurrentUrlProtocolPrefix();
                $sep = '/';
                $tmp = $matches[2][0] == $sep ? $matches[2] : dirname(Media::$current_css_file).$sep.ltrim($matches[2], $sep);
                $server = Tools::getMediaServer($tmp);

                return $matches[1].$protocol_link.$server.$tmp;
            } else {
                return $matches[0];
            }
        }

        return false;
    }

    /**
     * return jquery path.
     *
     * @param mixed $version
     *
     * @return string
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function getJqueryPath($version = null, $folder = null, $minifier = true)
    {
        $addNoConflict = false;
        if ($version === null) {
            $version = _PS_JQUERY_VERSION_;
        } //set default version
        elseif (preg_match('/^([0-9\.]+)$/Ui', $version)) {
            $addNoConflict = true;
        } else {
            return false;
        }

        if ($folder === null) {
            $folder = _PS_JS_DIR_.'jquery/';
        } //set default folder
        //check if file exist
        $file = $folder.'jquery-'.$version.($minifier ? '.min.js' : '.js');

        // remove PS_BASE_URI on _PS_ROOT_DIR_ for the following
        $urlData = parse_url($file);
        $fileUri = _PS_ROOT_DIR_.Tools::str_replace_once(__PS_BASE_URI__, DIRECTORY_SEPARATOR, $urlData['path']);
        $fileUriHostMode = _PS_CORE_DIR_.Tools::str_replace_once(__PS_BASE_URI__, DIRECTORY_SEPARATOR, $urlData['path']);
        // check if js files exists, if not try to load query from ajax.googleapis.com

        $return = [];

        if (@filemtime($fileUri) || (defined('_PS_HOST_MODE_') && @filemtime($fileUriHostMode))) {
            $return[] = Media::getJSPath($file);
        } else {
            $return[] = Media::getJSPath(
                Tools::getCurrentUrlProtocolPrefix().'ajax.googleapis.com/ajax/libs/jquery/'
                .$version.'/jquery'.($minifier ? '.min.js' : '.js')
            );
        }

        if ($addNoConflict) {
            $return[] = Media::getJSPath(
                Context::getContext()->shop->getBaseURL(true, false)._PS_JS_DIR_
                .'jquery/jquery.noConflict.php?version='.$version
            );
        }

        //added query migrate for compatibility with new version of jquery will be removed in ps 1.6
        $return[] = Media::getJSPath(_PS_JS_DIR_.'jquery/jquery-migrate-1.2.1.min.js');

        return $return;
    }

    /**
     * addJS return javascript path
     *
     * @param mixed $jsUri
     *
     * @return string
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function getJSPath($jsUri)
    {
        return Media::getMediaPath($jsUri);
    }

    /**
     * @param      $mediaUri
     * @param null $cssMediaType
     *
     * @return array|bool|mixed|string
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function getMediaPath($mediaUri, $cssMediaType = null)
    {
        if (is_array($mediaUri) || $mediaUri === null || empty($mediaUri)) {
            return false;
        }

        $urlData = parse_url($mediaUri);
        if (!is_array($urlData)) {
            return false;
        }

        if (!array_key_exists('host', $urlData)) {
            $mediaUriHostMode = '/'.ltrim(str_replace(str_replace(['/', '\\'], DIRECTORY_SEPARATOR, _PS_CORE_DIR_), __PS_BASE_URI__, $mediaUri), '/\\');
            $mediaUri = '/'.ltrim(str_replace(str_replace(['/', '\\'], DIRECTORY_SEPARATOR, _PS_ROOT_DIR_), __PS_BASE_URI__, $mediaUri), '/\\');
            // remove PS_BASE_URI on _PS_ROOT_DIR_ for the following
            $fileUri = _PS_ROOT_DIR_.Tools::str_replace_once(__PS_BASE_URI__, DIRECTORY_SEPARATOR, $mediaUri);
            $fileUriHostMode = _PS_CORE_DIR_.Tools::str_replace_once(__PS_BASE_URI__, DIRECTORY_SEPARATOR, Tools::str_replace_once(_PS_CORE_DIR_, '', $mediaUri));

            if (!@filemtime($fileUri) || @filesize($fileUri) === 0) {
                if (!defined('_PS_HOST_MODE_')) {
                    return false;
                } elseif (!@filemtime($fileUriHostMode) || @filesize($fileUriHostMode) === 0) {
                    return false;
                } else {
                    $mediaUri = $mediaUriHostMode;
                }
            }

            $mediaUri = str_replace('//', '/', $mediaUri);
        }

        if ($cssMediaType) {
            return [$mediaUri => $cssMediaType];
        }

        return $mediaUri;
    }

    /**
     * return jqueryUI component path.
     *
     * @param mixed $component
     *
     * @return string
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function getJqueryUIPath($component, $theme, $checkDependencies)
    {
        $uiPath = ['js' => [], 'css' => []];
        $folder = _PS_JS_DIR_.'jquery/ui/';
        $file = 'jquery.'.$component.'.min.js';
        $urlData = parse_url($folder.$file);
        $fileUri = _PS_ROOT_DIR_.Tools::str_replace_once(__PS_BASE_URI__, DIRECTORY_SEPARATOR, $urlData['path']);
        $fileUriHostMode = _PS_CORE_DIR_.Tools::str_replace_once(__PS_BASE_URI__, DIRECTORY_SEPARATOR, $urlData['path']);
        $uiTmp = [];
        if (isset(Media::$jquery_ui_dependencies[$component]) && Media::$jquery_ui_dependencies[$component]['theme'] && $checkDependencies) {
            $themeCss = Media::getCSSPath($folder.'themes/'.$theme.'/jquery.ui.theme.css');
            $compCss = Media::getCSSPath($folder.'themes/'.$theme.'/jquery.'.$component.'.css');
            if (!empty($themeCss) || $themeCss) {
                $uiPath['css'] = array_merge($uiPath['css'], $themeCss);
            }
            if (!empty($compCss) || $compCss) {
                $uiPath['css'] = array_merge($uiPath['css'], $compCss);
            }
        }
        if ($checkDependencies && array_key_exists($component, self::$jquery_ui_dependencies)) {
            foreach (self::$jquery_ui_dependencies[$component]['dependencies'] as $dependency) {
                $uiTmp[] = Media::getJqueryUIPath($dependency, $theme, false);
                if (self::$jquery_ui_dependencies[$dependency]['theme']) {
                    $depCss = Media::getCSSPath($folder.'themes/'.$theme.'/jquery.'.$dependency.'.css');
                }

                if (isset($depCss) && (!empty($depCss) || $depCss)) {
                    $uiPath['css'] = array_merge($uiPath['css'], $depCss);
                }
            }
        }
        if (@filemtime($fileUri) || (defined('_PS_HOST_MODE_') && @filemtime($fileUriHostMode))) {
            if (!empty($uiTmp)) {
                foreach ($uiTmp as $ui) {
                    if (!empty($ui['js'])) {
                        $uiPath['js'][] = $ui['js'];
                    }

                    if (!empty($ui['css'])) {
                        $uiPath['css'][] = $ui['css'];
                    }
                }
                $uiPath['js'][] = Media::getJSPath($folder.$file);
            } else {
                $uiPath['js'] = Media::getJSPath($folder.$file);
            }
        }

        //add i18n file for datepicker
        if ($component == 'ui.datepicker') {
            if (!is_array($uiPath['js'])) {
                $uiPath['js'] = [$uiPath['js']];
            }

            $uiPath['js'][] = Media::getJSPath($folder.'i18n/jquery.ui.datepicker-'.Context::getContext()->language->iso_code.'.js');
        }

        return $uiPath;
    }

    /**
     * addCSS return stylesheet path.
     *
     * @param mixed  $cssUri
     * @param string $cssMediaType
     * @param bool   $needRtl
     *
     * @return string
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function getCSSPath($cssUri, $cssMediaType = 'all', $needRtl = true)
    {
        // RTL Ready: search and load rtl css file if it's not originally rtl
        if ($needRtl && Context::getContext()->language->is_rtl) {
            $css_uri_rtl = preg_replace('/(^[^.].*)(\.css)$/', '$1_rtl.css', $cssUri);
            $rtl_media = Media::getMediaPath($css_uri_rtl, $cssMediaType);
            if ($rtl_media != false) {
                return $rtl_media;
            }
        }

        // End RTL
        return Media::getMediaPath($cssUri, $cssMediaType);
    }

    /**
     * return jquery plugin path.
     *
     * @param mixed $name
     *
     * @return string|boolean
     */
    public static function getJqueryPluginPath($name, $folder = null)
    {
        $pluginPath = ['js' => [], 'css' => []];
        if ($folder === null) {
            $folder = _PS_JS_DIR_.'jquery/plugins/';
        } //set default folder

        $file = 'jquery.'.$name.'.js';
        $urlData = parse_url($folder);
        $fileUri = _PS_ROOT_DIR_.Tools::str_replace_once(__PS_BASE_URI__, DIRECTORY_SEPARATOR, $urlData['path']);
        $fileUriHostMode = _PS_CORE_DIR_.Tools::str_replace_once(__PS_BASE_URI__, DIRECTORY_SEPARATOR, $urlData['path']);

        if (@file_exists($fileUri.$file) || (defined('_PS_HOST_MODE_') && @file_exists($fileUriHostMode.$file))) {
            $pluginPath['js'] = Media::getJSPath($folder.$file);
        } elseif (@file_exists($fileUri.$name.'/'.$file) || (defined('_PS_HOST_MODE_') && @file_exists($fileUriHostMode.$name.'/'.$file))) {
            $pluginPath['js'] = Media::getJSPath($folder.$name.'/'.$file);
        } else {
            return false;
        }
        $pluginPath['css'] = Media::getJqueryPluginCSSPath($name, $folder);

        return $pluginPath;
    }

    /**
     * return jquery plugin css path if exist.
     *
     * @param mixed $name
     *
     * @return string|boolean
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function getJqueryPluginCSSPath($name, $folder = null)
    {
        if ($folder === null) {
            $folder = _PS_JS_DIR_.'jquery/plugins/';
        } //set default folder
        $file = 'jquery.'.$name.'.css';
        $urlData = parse_url($folder);
        $fileUri = _PS_ROOT_DIR_.Tools::str_replace_once(__PS_BASE_URI__, DIRECTORY_SEPARATOR, $urlData['path']);
        $fileUriHostMode = _PS_CORE_DIR_.Tools::str_replace_once(__PS_BASE_URI__, DIRECTORY_SEPARATOR, $urlData['path']);

        if (@file_exists($fileUri.$file) || (defined('_PS_HOST_MODE_') && @file_exists($fileUriHostMode.$file))) {
            return Media::getCSSPath($folder.$file);
        } elseif (@file_exists($fileUri.$name.'/'.$file) || (defined('_PS_HOST_MODE_') && @file_exists($fileUriHostMode.$name.'/'.$file))) {
            return Media::getCSSPath($folder.$name.'/'.$file);
        } else {
            return false;
        }
    }

    /**
     * Combine Compress and Cache CSS (ccc) calls
     *
     * @param array $cssFiles
     * @param array $cachePath
     *
     * @return array processed css_files
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function cccCss($cssFiles, $cachePath = null)
    {
        //inits
        $cssFilesByMedia = [];
        $externalCssFiles = [];
        $compressedCssFiles = [];
        $compressedCssFilesNotFound = [];
        $compressedCssFilesInfos = [];
        $protocolLink = Tools::getCurrentUrlProtocolPrefix();
        //if cache_path not specified, set curent theme cache folder
        $cachePath = $cachePath ? $cachePath : _PS_THEME_DIR_.'cache/';
        $cssSplitNeedRefresh = false;

        // group css files by media
        foreach ($cssFiles as $filename => $media) {
            if (!array_key_exists($media, $cssFilesByMedia)) {
                $cssFilesByMedia[$media] = [];
            }

            $infos = [];
            $infos['uri'] = $filename;
            $urlData = parse_url($filename);

            if (array_key_exists('host', $urlData)) {
                $externalCssFiles[$filename] = $media;
                continue;
            }

            $infos['path'] = _PS_ROOT_DIR_.Tools::str_replace_once(__PS_BASE_URI__, '/', $urlData['path']);

            if (!@filemtime($infos['path'])) {
                $infos['path'] = _PS_CORE_DIR_.Tools::str_replace_once(__PS_BASE_URI__, '/', $urlData['path']);
            }

            $cssFilesByMedia[$media]['files'][] = $infos;
            if (!array_key_exists('date', $cssFilesByMedia[$media])) {
                $cssFilesByMedia[$media]['date'] = 0;
            }
            $cssFilesByMedia[$media]['date'] = max(
                (int) @filemtime($infos['path']),
                $cssFilesByMedia[$media]['date']
            );

            if (!array_key_exists($media, $compressedCssFilesInfos)) {
                $compressedCssFilesInfos[$media] = ['key' => ''];
            }
            $compressedCssFilesInfos[$media]['key'] .= $filename;
        }

        // get compressed css file infos
        $version = (int) Configuration::get('PS_CCCCSS_VERSION');
        foreach ($compressedCssFilesInfos as $media => &$info) {
            $key = md5($info['key'].$protocolLink);
            $filename = $cachePath.'v_'.$version.'_'.$key.'_'.$media.'.css';

            $info = [
                'key'  => $key,
                'date' => (int) @filemtime($filename),
            ];
        }

        foreach ($cssFilesByMedia as $media => $mediaInfos) {
            if ($mediaInfos['date'] > $compressedCssFilesInfos[$media]['date']) {
                if ($compressedCssFilesInfos[$media]['date']) {
                    Configuration::updateValue('PS_CCCCSS_VERSION', ++$version);
                    break;
                }
            }
        }

        // aggregate and compress css files content, write new caches files
        $importUrl = [];
        foreach ($cssFilesByMedia as $media => $mediaInfos) {
            $cacheFilename = $cachePath.'v_'.$version.'_'.$compressedCssFilesInfos[$media]['key'].'_'.$media.'.css';
            if ($mediaInfos['date'] > $compressedCssFilesInfos[$media]['date']) {
                $cssSplitNeedRefresh = true;
                $cacheFilename = $cachePath.'v_'.$version.'_'.$compressedCssFilesInfos[$media]['key'].'_'.$media.'.css';
                $compressedCssFiles[$media] = '';
                foreach ($mediaInfos['files'] as $file_infos) {
                    if (file_exists($file_infos['path'])) {
                        $compressedCssFiles[$media] .= Media::minifyCSS(file_get_contents($file_infos['path']), $file_infos['uri'], $importUrl);
                    } else {
                        $compressedCssFilesNotFound[] = $file_infos['path'];
                    }
                }
                if (!empty($compressedCssFilesNotFound)) {
                    $content = '/* WARNING ! file(s) not found : "'.
                        implode(',', $compressedCssFilesNotFound).
                        '" */'."\n".$compressedCssFiles[$media];
                } else {
                    $content = $compressedCssFiles[$media];
                }

                $content = '@charset "UTF-8";'."\n".$content;
                $content = implode('', $importUrl).$content;
                file_put_contents($cacheFilename, $content);
                chmod($cacheFilename, 0777);
            }
            $compressedCssFiles[$media] = $cacheFilename;
        }

        // rebuild the original css_files array
        $cssFiles = [];
        foreach ($compressedCssFiles as $media => $filename) {
            $url = str_replace(_PS_THEME_DIR_, _THEMES_DIR_._THEME_NAME_.'/', $filename);
            $cssFiles[$protocolLink.Tools::getMediaServer($url).$url] = $media;
        }

        $compiledCss = array_merge($externalCssFiles, $cssFiles);

        //If browser not IE <= 9, bypass ieCssSplitter
        $userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
        if (!preg_match('/(?i)msie [1-9]/', $userAgent)) {
            return $compiledCss;
        }
        $splitted_css = self::ieCssSplitter($compiledCss, $cachePath.'ie9', $cssSplitNeedRefresh);

        return array_merge($splitted_css, $compiledCss);
    }

    /**
     * @param       $cssContent
     * @param bool  $fileuri
     * @param array $importUrl
     *
     * @return bool|string
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function minifyCSS($cssContent, $fileuri = false, &$importUrl = [])
    {
        Media::$current_css_file = $fileuri;

        if (strlen($cssContent) > 0) {
            $limit = Media::getBackTrackLimit();
            $cssContent = preg_replace('#/\*.*?\*/#s', '', $cssContent, $limit);
            $cssContent = preg_replace_callback(Media::$pattern_callback, ['Media', 'replaceByAbsoluteURL'], $cssContent, $limit);
            $cssContent = preg_replace('#\s+#', ' ', $cssContent, $limit);
            $cssContent = str_replace(["\t", "\n", "\r"], '', $cssContent);
            $cssContent = str_replace(['; ', ': '], [';', ':'], $cssContent);
            $cssContent = str_replace([' {', '{ '], '{', $cssContent);
            $cssContent = str_replace(', ', ',', $cssContent);
            $cssContent = str_replace(['} ', ' }', ';}'], '}', $cssContent);
            $cssContent = str_replace([':0px', ':0em', ':0pt', ':0%'], ':0', $cssContent);
            $cssContent = str_replace([' 0px', ' 0em', ' 0pt', ' 0%'], ' 0', $cssContent);
            $cssContent = str_replace('\'images_ie/', '\'images/', $cssContent);
            $cssContent = preg_replace_callback('#(AlphaImageLoader\(src=\')([^\']*\',)#s', ['Tools', 'replaceByAbsoluteURL'], $cssContent);
            // Store all import url
            preg_match_all('#@(import|charset) .*?;#i', $cssContent, $m);
            for ($i = 0, $total = count($m[0]); $i < $total; $i++) {
                if (isset($m[1][$i]) && $m[1][$i] == 'import') {
                    $importUrl[] = $m[0][$i];
                }
                $cssContent = str_replace($m[0][$i], '', $cssContent);
            }

            return trim($cssContent);
        }

        return false;
    }

    /**
     * Splits stylesheets that go beyond the IE limit of 4096 selectors
     *
     * @param array  $compiledCss
     * @param string $cachePath
     * @param bool   $refresh
     *
     * @return array processed css_files
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function ieCssSplitter($compiledCss, $cachePath, $refresh = false)
    {
        $splittedCss = [];
        $protocolLink = Tools::getCurrentUrlProtocolPrefix();
        //return cached css
        if (!$refresh) {
            $files = @scandir($cachePath);
            if (is_array($files)) {
                foreach (array_diff($files, ['..', '.']) as $file) {
                    $cssUrl = str_replace(_PS_ROOT_DIR_, '', $protocolLink.Tools::getMediaServer('').$cachePath.DIRECTORY_SEPARATOR.$file);
                    $splittedCss[$cssUrl] = 'all';
                }
            }

            return ['lteIE9' => $splittedCss];
        }
        if (!is_dir($cachePath)) {
            mkdir($cachePath, 0777, true);
        }
        $splitter = new Splitter();
        $cssRuleLimit = 4095;
        foreach ($compiledCss as $css => $media) {
            $fileInfo = parse_url($css);
            $fileBasename = basename($fileInfo['path']);
            $cssContent = file_get_contents(_PS_ROOT_DIR_.$fileInfo['path']);
            $count = $splitter->countSelectors($cssContent) - $cssRuleLimit;
            if (($count / $cssRuleLimit) > 0) {
                $part = 2;
                for ($i = $count; $i > 0; $i -= $cssRuleLimit) {
                    $newCssName = 'ie_split_'.$part.'_'.$fileBasename;
                    $cssUrl = str_replace(_PS_ROOT_DIR_, '', $protocolLink.Tools::getMediaServer('').$cachePath.DIRECTORY_SEPARATOR.$newCssName);
                    $splittedCss[$cssUrl] = $media;
                    file_put_contents($cachePath.DIRECTORY_SEPARATOR.$newCssName, $splitter->split($cssContent, $part));
                    chmod($cachePath.DIRECTORY_SEPARATOR.$newCssName, 0777);
                    $part++;
                }
            }
        }
        if (count($splittedCss) > 0) {
            return ['lteIE9' => $splittedCss];
        }

        return ['lteIE9' => []];
    }

    /**
     * Combine Compress and Cache (ccc) JS calls
     *
     * @param array $jsFiles
     *
     * @return array processed js_files
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function cccJS($jsFiles)
    {
        //inits
        $compressedJsFilesNotFound = [];
        $jsFilesInfos = [];
        $jsFilesDate = 0;
        $compressedJsFilename = '';
        $jsExternalFiles = [];
        $protocolLink = Tools::getCurrentUrlProtocolPrefix();
        $cachePath = _PS_THEME_DIR_.'cache/';

        // get js files infos
        foreach ($jsFiles as $filename) {
            if (Validate::isAbsoluteUrl($filename)) {
                $jsExternalFiles[] = $filename;
            } else {
                $infos = [];
                $infos['uri'] = $filename;
                $urlData = parse_url($filename);
                $infos['path'] = _PS_ROOT_DIR_.Tools::str_replace_once(__PS_BASE_URI__, '/', $urlData['path']);

                if (!@filemtime($infos['path'])) {
                    $infos['path'] = _PS_CORE_DIR_.Tools::str_replace_once(__PS_BASE_URI__, '/', $urlData['path']);
                }

                $jsFilesInfos[] = $infos;

                $jsFilesDate = max(
                    (int) @filemtime($infos['path']),
                    $jsFilesDate
                );
                $compressedJsFilename .= $filename;
            }
        }

        // get compressed js file infos
        $compressedJsFilename = md5($compressedJsFilename);
        $version = (int) Configuration::get('PS_CCCJS_VERSION');
        $compressedJsPath = $cachePath.'v_'.$version.'_'.$compressedJsFilename.'.js';
        $compressedJsFileDate = (int) @filemtime($compressedJsPath);

        // aggregate and compress js files content, write new caches files
        if ($jsFilesDate > $compressedJsFileDate) {
            if ($compressedJsFileDate) {
                Configuration::updateValue('PS_CCCJS_VERSION', ++$version);
            }

            $compressedJsPath = $cachePath.'v_'.$version.'_'.$compressedJsFilename.'.js';
            $content = '';
            foreach ($jsFilesInfos as $fileInfos) {
                if (file_exists($fileInfos['path'])) {
                    $tmpContent = file_get_contents($fileInfos['path']);
                    if (preg_match('@\.(min|pack)\.[^/]+$@', $fileInfos['path'], $matches)) {
                        $content .= preg_replace('/\/\/@\ssourceMappingURL\=[_a-zA-Z0-9-.]+\.'.$matches[1].'\.map\s+/', '', $tmpContent);
                    } else {
                        $content .= Media::packJS($tmpContent);
                    }
                } else {
                    $compressedJsFilesNotFound[] = $fileInfos['path'];
                }
            }

            if (!empty($compressedJsFilesNotFound)) {
                $content = '/* WARNING ! file(s) not found : "'.implode(',', $compressedJsFilesNotFound).'" */'."\n".$content;
            }

            file_put_contents($compressedJsPath, $content);
            chmod($compressedJsPath, 0777);
        }

        // rebuild the original js_files array
        if (strpos($compressedJsPath, _PS_ROOT_DIR_) !== false) {
            $url = str_replace(_PS_ROOT_DIR_.'/', __PS_BASE_URI__, $compressedJsPath);
        }

        if (strpos($compressedJsPath, _PS_CORE_DIR_) !== false) {
            $url = str_replace(_PS_CORE_DIR_.'/', __PS_BASE_URI__, $compressedJsPath);
        }

        return array_merge([$protocolLink.Tools::getMediaServer($url).$url], $jsExternalFiles);
    }

    /**
     * Clear theme cache
     *
     * @return void
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function clearCache()
    {
        if (!Configuration::get('TB_KEEP_CCC_FILES')) {
            foreach ([_PS_THEME_DIR_.'cache'] as $dir) {
                if (file_exists($dir)) {
                    foreach (array_diff(scandir($dir), ['..', '.', 'index.php']) as $file) {
                        Tools::deleteFile($dir.DIRECTORY_SEPARATOR.$file);
                    }
                }
            }
        }

        $version = (int) Configuration::get('PS_CCCJS_VERSION');
        Configuration::updateValue('PS_CCCJS_VERSION', ++$version);
        $version = (int) Configuration::get('PS_CCCCSS_VERSION');
        Configuration::updateValue('PS_CCCCSS_VERSION', ++$version);
    }

    /**
     * Get JS definitions
     *
     * @return array JS definitions
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function getJsDef()
    {
        ksort(Media::$js_def);

        return Media::$js_def;
    }

    /**
     * Get JS inline script
     *
     * @return array inline script
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function getInlineScript()
    {
        return Media::$inline_script;
    }

    /**
     * Add a new javascript definition at bottom of page
     *
     * @param mixed $jsDef
     *
     * @return void
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function addJsDef($jsDef)
    {
        if (is_array($jsDef)) {
            foreach ($jsDef as $key => $js) {
                Media::$js_def[$key] = $js;
            }
        } elseif ($jsDef) {
            Media::$js_def[] = $jsDef;
        }
    }

    /**
     * Add a new javascript definition from a capture at bottom of page
     *
     * @param mixed  $params
     * @param string $content
     * @param Smarty $smarty
     * @param bool   $repeat
     *
     * @return void
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function addJsDefL($params, $content, $smarty = null, &$repeat = false)
    {
        if (!$repeat && isset($params) && Tools::strlen($content)) {
            if (!is_array($params)) {
                $params = (array) $params;
            }

            foreach ($params as $param) {
                Media::$js_def[$param] = $content;
            }
        }
    }

    /**
     * @param $output
     *
     * @return mixed
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function deferInlineScripts($output)
    {
        /* Try to enqueue in js_files inline scripts with src but without conditionnal comments */
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        @$dom->loadHTML(($output));
        libxml_use_internal_errors(false);
        $scripts = $dom->getElementsByTagName('script');
        if (is_object($scripts) && $scripts->length) {
            foreach ($scripts as $script) {
                /** @var DOMElement $script */
                if ($src = $script->getAttribute('src')) {
                    if (substr($src, 0, 2) == '//') {
                        $src = Tools::getCurrentUrlProtocolPrefix().substr($src, 2);
                    }

                    $patterns = [
                        '#code\.jquery\.com/jquery-([0-9\.]+)(\.min)*\.js$#Ui',
                        '#ajax\.googleapis\.com/ajax/libs/jquery/([0-9\.]+)/jquery(\.min)*\.js$#Ui',
                        '#ajax\.aspnetcdn\.com/ajax/jquery/jquery-([0-9\.]+)(\.min)*\.js$#Ui',
                        '#cdnjs\.cloudflare\.com/ajax/libs/jquery/([0-9\.]+)/jquery(\.min)*\.js$#Ui',
                        '#/jquery-([0-9\.]+)(\.min)*\.js$#Ui',
                    ];

                    foreach ($patterns as $pattern) {
                        $matches = [];
                        if (preg_match($pattern, $src, $matches)) {
                            $minifier = $version = false;
                            if (isset($matches[2]) && $matches[2]) {
                                $minifier = (bool) $matches[2];
                            }
                            if (isset($matches[1]) && $matches[1]) {
                                $version = $matches[1];
                            }
                            if ($version) {
                                if ($version != _PS_JQUERY_VERSION_) {
                                    Context::getContext()->controller->addJquery($version, null, $minifier);
                                }
                                array_push(Media::$inline_script_src, $src);
                            }
                        }
                    }
                    if (!in_array($src, Media::$inline_script_src) && !$script->getAttribute(Media::$pattern_keepinline)) {
                        Context::getContext()->controller->addJS($src);
                    }
                }
            }
        }
        $output = preg_replace_callback(Media::$pattern_js, ['Media', 'deferScript'], $output);

        return $output;
    }

    /**
     * Get all JS scripts and place it to bottom
     * To be used in callback with deferInlineScripts
     *
     * @param array $matches
     *
     * @return bool|string Empty string or original script lines
     *
     * @since   1.0.0
     * @version 1.0.0 Initial version
     */
    public static function deferScript($matches)
    {
        if (!is_array($matches)) {
            return false;
        }
        $inline = '';

        if (isset($matches[0])) {
            $original = trim($matches[0]);
        } else {
            $original = '';
        }

        if (isset($matches[2])) {
            $inline = trim($matches[2]);
        }

        /* This is an inline script, add its content to inline scripts stack then remove it from content */
        if (!empty($inline) && preg_match(Media::$pattern_js, $original) !== false && !preg_match('/'.Media::$pattern_keepinline.'/', $original) && Media::$inline_script[] = $inline) {
            return '';
        }
        /* This is an external script, if it already belongs to js_files then remove it from content */
        preg_match('/src\s*=\s*["\']?([^"\']*)[^>]/ims', $original, $results);
        if (array_key_exists(1, $results)) {
            if (substr($results[1], 0, 2) == '//') {
                $protocolLink = Tools::getCurrentUrlProtocolPrefix();
                $results[1] = $protocolLink.ltrim($results[1], '/');
            }

            if (in_array($results[1], Context::getContext()->controller->js_files) || in_array($results[1], Media::$inline_script_src)) {
                return '';
            }
        }

        /* return original string because no match was found */

        return "\n".$original;
    }
}
