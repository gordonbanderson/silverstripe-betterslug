<?php

use SilverStripe\View\Parsers\Transliterator;

Object::useCustomClass(Transliterator::class, 'ExtendedTransliterator');