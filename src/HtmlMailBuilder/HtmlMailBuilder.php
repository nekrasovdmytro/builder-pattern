<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.01.16
 * Time: 14:15
 */

namespace HtmlMailBuilder;


class HtmlMailBuilder extends AbstractHtmlMailBuilder
{
    protected $htmlMail;

    public function __construct()
    {
        $this->htmlMail = new HtmlMail();
    }

    public function setBody($header, $content, $footer)
    {
        $this->htmlMail->setHeaderText($header);
        $this->htmlMail->setContent($content);
        $this->htmlMail->setFooterText($footer);
    }

    public function getHtmlMail()
    {
        return $this->htmlMail;
    }
}