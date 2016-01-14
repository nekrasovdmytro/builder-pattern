<?php

include 'vendor/autoload.php';

use HtmlMailBuilder\HtmlMailBuilder;
use HtmlMailBuilder\HtmlMailDirector;

$mailBuilder = new HtmlMailBuilder();
$mailDirector = new HtmlMailDirector($mailBuilder);

$mailDirector->buildHtmlMail();
$mail = $mailDirector->getHtmlMail();

echo $mail->generateMail();