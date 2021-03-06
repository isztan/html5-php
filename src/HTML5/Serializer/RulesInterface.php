<?php
/**
 * @file
 * The interface definition for Rules to generate output.
 */
namespace HTML5\Serializer;

/**
 * To create a new rule set for writing output the RulesInterface needs to be
 * implemented. The resulting class can be specified in the options with the
 * key of rules.
 *
 * For an example implementation see \HTML5\Serializer\OutputRules.
 */
interface RulesInterface {

  /**
   * The class constructor.
   *
   * @param \HTML5\Serializer\Traverser $traverser
   *   The traverser walking through the html.
   * @param mixed $output
   *   The output stream to write output to.
   * @param array $options
   *   An array of options.
   */
  public function __construct($traverser, $output, $options = array());

  /**
   * Write a document element (\DOMDocument).
   *
   * Instead of returning the result write it to the output stream ($output)
   * that was passed into the constructor.
   * 
   * @param \DOMDocument $dom
   */
  public function document($dom);

  /**
   * Write an element.
   *
   * Instead of returning the result write it to the output stream ($output)
   * that was passed into the constructor.
   * 
   * @param mixed $ele
   */
  public function element($ele);

  /**
   * Write a text node.
   *
   * Instead of returning the result write it to the output stream ($output)
   * that was passed into the constructor.
   * 
   * @param mixed $ele
   */
  public function text($ele);

  /**
   * Write a CDATA node.
   *
   * Instead of returning the result write it to the output stream ($output)
   * that was passed into the constructor.
   * 
   * @param mixed $ele
   */
  public function cdata($ele);

  /**
   * Write a comment node.
   *
   * Instead of returning the result write it to the output stream ($output)
   * that was passed into the constructor.
   * 
   * @param mixed $ele
   */
  public function comment($ele);

  /**
   * Write a processor instruction.
   *
   * To learn about processor instructions see \HTML5\InstructionProcessor
   *
   * Instead of returning the result write it to the output stream ($output)
   * that was passed into the constructor.
   * 
   * @param mixed $ele
   */
  public function processorInstruction($ele);
}