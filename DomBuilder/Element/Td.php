<?php
/** 
 * td – table cell.
 *
 * The td element represents a data cell in a table.
 *
 * @author    Sergey Baigudin, baigudin@mail.ru
 * @copyright 2012-2016 Sergey Baigudin
 * @license   http://baigudin.software/license/
 * @link      http://baigudin.software
 * @see       https://www.w3.org/TR/html-markup/td.html
 */
namespace DomBuilder\Element; 

class Td extends \DomBuilder\Core\Element\DoubleBlock
{
  /** 
   * Constructor.
   */
  function __construct()
  {
    parent::__construct();
    $this->_tagName('td');
  }
}