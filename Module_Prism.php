<?php
namespace GDO\Prism;

use GDO\Core\GDO_Module;

/**
 * Include prism syntax highlighter.
 * @see https://prismjs.com/
 * @author gizmore
 * @since 6.10
 */
final class Module_Prism extends GDO_Module
{
    public function onIncludeScripts()
    {
        $this->addJavascript('prism/prism.js');
        $this->addCSS('prism/prism.css');
        $this->addJavascript('js/gdo6-prism.js');
    }
    
}
