<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.01.16
 * Time: 14:07
 */

namespace HtmlMailBuilder;


class HtmlMail
{
    protected $content;
    protected $headerText;
    protected $footerText;

    public function setHeaderText($text)
    {
        $this->headerText = $text;
    }

    public function getHeaderText()
    {
        return $this->headerText;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setFooterText($text)
    {
        $this->footerText = $text;
    }

    public function getFooterText()
    {
        return $this->footerText;
    }

    public function generateMail($mailTemplate = null)
    {
        $mail = $mailTemplate !== null ? $mailTemplate : "<h1>%s</h1><div>%s</div><hr/><div>%s</div>";

        return sprintf($mail,
            $this->getHeaderText(),
            $this->getContent(),
            $this->getFooterText()
        );
    }
}