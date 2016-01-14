<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.01.16
 * Time: 14:29
 */

namespace HtmlMailBuilder;


abstract class AbstractHtmlMailDirector
{
    abstract function __construct(AbstractHtmlMailBuilder $mb);

    abstract function buildHtmlMail();

    abstract function getHtmlMail();
}