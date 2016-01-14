<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.01.16
 * Time: 14:32
 */

namespace HtmlMailBuilder;


class HtmlMailDirector extends AbstractHtmlMailDirector
{
    protected $mb;

    public function __construct(AbstractHtmlMailBuilder $mb)
    {
        $this->mb = $mb;
    }

    public function buildHtmlMail()
    {
        $this->mb->setBody('Hello, world', "Some content <br/> and html", 'Bye-bye');
    }

    public function getHtmlMail()
    {
        return $this->mb->getHtmlMail();
    }
}