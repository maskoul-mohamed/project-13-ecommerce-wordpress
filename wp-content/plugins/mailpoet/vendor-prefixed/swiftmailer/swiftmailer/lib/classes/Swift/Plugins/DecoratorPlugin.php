<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_Plugins_DecoratorPlugin implements Swift_Events_SendListener, Swift_Plugins_Decorator_Replacements
{
 private $replacements;
 private $originalBody;
 private $originalHeaders = [];
 private $originalChildBodies = [];
 private $lastMessage;
 public function __construct($replacements)
 {
 $this->setReplacements($replacements);
 }
 public function setReplacements($replacements)
 {
 if (!$replacements instanceof Swift_Plugins_Decorator_Replacements) {
 $this->replacements = (array) $replacements;
 } else {
 $this->replacements = $replacements;
 }
 }
 public function beforeSendPerformed(Swift_Events_SendEvent $evt)
 {
 $message = $evt->getMessage();
 $this->restoreMessage($message);
 $to = \array_keys($message->getTo());
 $address = \array_shift($to);
 if ($replacements = $this->getReplacementsFor($address)) {
 $body = $message->getBody();
 $search = \array_keys($replacements);
 $replace = \array_values($replacements);
 $bodyReplaced = \str_replace($search, $replace, $body);
 if ($body != $bodyReplaced) {
 $this->originalBody = $body;
 $message->setBody($bodyReplaced);
 }
 foreach ($message->getHeaders()->getAll() as $header) {
 $body = $header->getFieldBodyModel();
 $count = 0;
 if (\is_array($body)) {
 $bodyReplaced = [];
 foreach ($body as $key => $value) {
 $count1 = 0;
 $count2 = 0;
 $key = \is_string($key) ? \str_replace($search, $replace, $key, $count1) : $key;
 $value = \is_string($value) ? \str_replace($search, $replace, $value, $count2) : $value;
 $bodyReplaced[$key] = $value;
 if (!$count && ($count1 || $count2)) {
 $count = 1;
 }
 }
 } elseif (\is_string($body)) {
 $bodyReplaced = \str_replace($search, $replace, $body, $count);
 }
 if ($count) {
 $this->originalHeaders[$header->getFieldName()] = $body;
 $header->setFieldBodyModel($bodyReplaced);
 }
 }
 $children = (array) $message->getChildren();
 foreach ($children as $child) {
 list($type) = \sscanf($child->getContentType(), '%[^/]/%s');
 if ('text' == $type) {
 $body = $child->getBody();
 $bodyReplaced = \str_replace($search, $replace, $body);
 if ($body != $bodyReplaced) {
 $child->setBody($bodyReplaced);
 $this->originalChildBodies[$child->getId()] = $body;
 }
 }
 }
 $this->lastMessage = $message;
 }
 }
 public function getReplacementsFor($address)
 {
 if ($this->replacements instanceof Swift_Plugins_Decorator_Replacements) {
 return $this->replacements->getReplacementsFor($address);
 }
 return $this->replacements[$address] ?? null;
 }
 public function sendPerformed(Swift_Events_SendEvent $evt)
 {
 $this->restoreMessage($evt->getMessage());
 }
 private function restoreMessage(Swift_Mime_SimpleMessage $message)
 {
 if ($this->lastMessage === $message) {
 if (isset($this->originalBody)) {
 $message->setBody($this->originalBody);
 $this->originalBody = null;
 }
 if (!empty($this->originalHeaders)) {
 foreach ($message->getHeaders()->getAll() as $header) {
 if (\array_key_exists($header->getFieldName(), $this->originalHeaders)) {
 $header->setFieldBodyModel($this->originalHeaders[$header->getFieldName()]);
 }
 }
 $this->originalHeaders = [];
 }
 if (!empty($this->originalChildBodies)) {
 $children = (array) $message->getChildren();
 foreach ($children as $child) {
 $id = $child->getId();
 if (\array_key_exists($id, $this->originalChildBodies)) {
 $child->setBody($this->originalChildBodies[$id]);
 }
 }
 $this->originalChildBodies = [];
 }
 $this->lastMessage = null;
 }
 }
}
