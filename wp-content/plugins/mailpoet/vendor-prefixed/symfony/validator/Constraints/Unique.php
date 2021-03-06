<?php
namespace MailPoetVendor\Symfony\Component\Validator\Constraints;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Symfony\Component\Validator\Constraint;
class Unique extends Constraint
{
 public const IS_NOT_UNIQUE = '7911c98d-b845-4da0-94b7-a8dac36bc55a';
 protected static $errorNames = [self::IS_NOT_UNIQUE => 'IS_NOT_UNIQUE'];
 public $message = 'This collection should contain only unique elements.';
}
