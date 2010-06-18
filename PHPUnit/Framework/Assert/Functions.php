<?php
/**
 * PHPUnit
 *
 * Copyright (c) 2002-2010, Sebastian Bergmann <sb@sebastian-bergmann.de>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Sebastian Bergmann nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @package    PHPUnit
 * @subpackage Framework
 * @author     Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @copyright  2002-2010 Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       http://www.phpunit.de/
 * @since      File available since Release 3.5.0
 */

/**
 * Asserts that an array has a specified key.
 *
 * @param  mixed  $key
 * @param  array  $array
 * @param  string $message
 * @since  Method available since Release 3.0.0
 */
function assertArrayHasKey($key, array $array, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertArrayHasKey'), $args);
}

/**
 * Asserts that an array does not have a specified key.
 *
 * @param  mixed  $key
 * @param  array  $array
 * @param  string $message
 * @since  Method available since Release 3.0.0
 */
function assertArrayNotHasKey($key, array $array, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertArrayNotHasKey'), $args);
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object contains a needle.
 *
 * @param  mixed   $needle
 * @param  string  $haystackAttributeName
 * @param  mixed   $haystackClassOrObject
 * @param  string  $message
 * @param  boolean $ignoreCase
 * @since  Method available since Release 3.0.0
 */
function assertAttributeContains($needle, $haystackAttributeName, $haystackClassOrObject, $message = '', $ignoreCase = FALSE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeContains'), $args);
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object contains only values of a given type.
 *
 * @param  string  $type
 * @param  string  $haystackAttributeName
 * @param  mixed   $haystackClassOrObject
 * @param  boolean $isNativeType
 * @param  string  $message
 * @since  Method available since Release 3.1.4
 */
function assertAttributeContainsOnly($type, $haystackAttributeName, $haystackClassOrObject, $isNativeType = NULL, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeContainsOnly'), $args);
}

/**
 * Asserts that a static attribute of a class or an attribute of an object
 * is empty.
 *
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertAttributeEmpty($haystackAttributeName, $haystackClassOrObject, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeEmpty'), $args);
}

/**
 * Asserts that a variable is equal to an attribute of an object.
 *
 * @param  mixed   $expected
 * @param  string  $actualAttributeName
 * @param  string  $actualClassOrObject
 * @param  string  $message
 * @param  float   $delta
 * @param  integer $maxDepth
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 */
function assertAttributeEquals($expected, $actualAttributeName, $actualClassOrObject, $message = '', $delta = 0, $maxDepth = 10, $canonicalize = FALSE, $ignoreCase = FALSE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeEquals'), $args);
}

/**
 * Asserts that an attribute is greater than another value.
 *
 * @param  mixed   $expected
 * @param  string  $actualAttributeName
 * @param  string  $actualClassOrObject
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertAttributeGreaterThan($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeGreaterThan'), $args);
}

/**
 * Asserts that an attribute is greater than or equal to another value.
 *
 * @param  mixed   $expected
 * @param  string  $actualAttributeName
 * @param  string  $actualClassOrObject
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertAttributeGreaterThanOrEqual($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeGreaterThanOrEqual'), $args);
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertAttributeInstanceOf($expected, $attributeName, $classOrObject, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeInstanceOf'), $args);
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertAttributeInternalType($expected, $attributeName, $classOrObject, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeInternalType'), $args);
}

/**
 * Asserts that an attribute is smaller than another value.
 *
 * @param  mixed   $expected
 * @param  string  $actualAttributeName
 * @param  string  $actualClassOrObject
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertAttributeLessThan($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeLessThan'), $args);
}

/**
 * Asserts that an attribute is smaller than or equal to another value.
 *
 * @param  mixed   $expected
 * @param  string  $actualAttributeName
 * @param  string  $actualClassOrObject
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertAttributeLessThanOrEqual($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeLessThanOrEqual'), $args);
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object does not contain a needle.
 *
 * @param  mixed   $needle
 * @param  string  $haystackAttributeName
 * @param  mixed   $haystackClassOrObject
 * @param  string  $message
 * @param  boolean $ignoreCase
 * @since  Method available since Release 3.0.0
 */
function assertAttributeNotContains($needle, $haystackAttributeName, $haystackClassOrObject, $message = '', $ignoreCase = FALSE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeNotContains'), $args);
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object does not contain only values of a given
 * type.
 *
 * @param  string  $type
 * @param  string  $haystackAttributeName
 * @param  mixed   $haystackClassOrObject
 * @param  boolean $isNativeType
 * @param  string  $message
 * @since  Method available since Release 3.1.4
 */
function assertAttributeNotContainsOnly($type, $haystackAttributeName, $haystackClassOrObject, $isNativeType = NULL, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeNotContainsOnly'), $args);
}

/**
 * Asserts that a static attribute of a class or an attribute of an object
 * is not empty.
 *
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertAttributeNotEmpty($haystackAttributeName, $haystackClassOrObject, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeNotEmpty'), $args);
}

/**
 * Asserts that a variable is not equal to an attribute of an object.
 *
 * @param  mixed   $expected
 * @param  string  $actualAttributeName
 * @param  string  $actualClassOrObject
 * @param  string  $message
 * @param  float   $delta
 * @param  integer $maxDepth
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 */
function assertAttributeNotEquals($expected, $actualAttributeName, $actualClassOrObject, $message = '', $delta = 0, $maxDepth = 10, $canonicalize = FALSE, $ignoreCase = FALSE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeNotEquals'), $args);
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertAttributeNotInstanceOf($expected, $attributeName, $classOrObject, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeNotInstanceOf'), $args);
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertAttributeNotInternalType($expected, $attributeName, $classOrObject, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeNotInternalType'), $args);
}

/**
 * Asserts that a variable and an attribute of an object do not have the
 * same type and value.
 *
 * @param  mixed  $expected
 * @param  string $actualAttributeName
 * @param  object $actualClassOrObject
 * @param  string $message
 */
function assertAttributeNotSame($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeNotSame'), $args);
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param  string  $expected
 * @param  string  $attributeName
 * @param  mixed   $classOrObject
 * @param  string  $message
 * @since  Method available since Release 3.4.0
 */
function assertAttributeNotType($expected, $attributeName, $classOrObject, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeNotType'), $args);
}

/**
 * Asserts that a variable and an attribute of an object have the same type
 * and value.
 *
 * @param  mixed  $expected
 * @param  string $actualAttributeName
 * @param  object $actualClassOrObject
 * @param  string $message
 */
function assertAttributeSame($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeSame'), $args);
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param  string  $expected
 * @param  string  $attributeName
 * @param  mixed   $classOrObject
 * @param  string  $message
 * @since  Method available since Release 3.4.0
 */
function assertAttributeType($expected, $attributeName, $classOrObject, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertAttributeType'), $args);
}

/**
 * Asserts that a class has a specified attribute.
 *
 * @param  string $attributeName
 * @param  string $className
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertClassHasAttribute($attributeName, $className, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertClassHasAttribute'), $args);
}

/**
 * Asserts that a class has a specified static attribute.
 *
 * @param  string $attributeName
 * @param  string $className
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertClassHasStaticAttribute($attributeName, $className, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertClassHasStaticAttribute'), $args);
}

/**
 * Asserts that a class does not have a specified attribute.
 *
 * @param  string $attributeName
 * @param  string $className
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertClassNotHasAttribute($attributeName, $className, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertClassNotHasAttribute'), $args);
}

/**
 * Asserts that a class does not have a specified static attribute.
 *
 * @param  string $attributeName
 * @param  string $className
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertClassNotHasStaticAttribute($attributeName, $className, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertClassNotHasStaticAttribute'), $args);
}

/**
 * Asserts that a haystack contains a needle.
 *
 * @param  mixed   $needle
 * @param  mixed   $haystack
 * @param  string  $message
 * @param  boolean $ignoreCase
 * @since  Method available since Release 2.1.0
 */
function assertContains($needle, $haystack, $message = '', $ignoreCase = FALSE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertContains'), $args);
}

/**
 * Asserts that a haystack contains only values of a given type.
 *
 * @param  string  $type
 * @param  mixed   $haystack
 * @param  boolean $isNativeType
 * @param  string  $message
 * @since  Method available since Release 3.1.4
 */
function assertContainsOnly($type, $haystack, $isNativeType = NULL, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertContainsOnly'), $args);
}

/**
 * Asserts that a variable is empty.
 *
 * @param  mixed   $actual
 * @param  string  $message
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertEmpty($actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertEmpty'), $args);
}

/**
 * Asserts that a hierarchy of DOMNodes matches.
 *
 * @param DOMNode $expectedNode
 * @param DOMNode $actualNode
 * @param boolean $checkAttributes
 * @param string  $message
 * @author Mattis Stordalen Flister <mattis@xait.no>
 * @since  Method available since Release 3.3.0
 */
function assertEqualXMLStructure(DOMNode $expectedNode, DOMNode $actualNode, $checkAttributes = FALSE, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertEqualXMLStructure'), $args);
}

/**
 * Asserts that two variables are equal.
 *
 * @param  mixed   $expected
 * @param  mixed   $actual
 * @param  string  $message
 * @param  float   $delta
 * @param  integer $maxDepth
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 */
function assertEquals($expected, $actual, $message = '', $delta = 0, $maxDepth = 10, $canonicalize = FALSE, $ignoreCase = FALSE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertEquals'), $args);
}

/**
 * Asserts that a condition is false.
 *
 * @param  boolean  $condition
 * @param  string   $message
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertFalse($condition, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertFalse'), $args);
}

/**
 * Asserts that the contents of one file is equal to the contents of another
 * file.
 *
 * @param  string  $expected
 * @param  string  $actual
 * @param  string  $message
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 * @since  Method available since Release 3.2.14
 */
function assertFileEquals($expected, $actual, $message = '', $canonicalize = FALSE, $ignoreCase = FALSE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertFileEquals'), $args);
}

/**
 * Asserts that a file exists.
 *
 * @param  string $filename
 * @param  string $message
 * @since  Method available since Release 3.0.0
 */
function assertFileExists($filename, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertFileExists'), $args);
}

/**
 * Asserts that the contents of one file is not equal to the contents of
 * another file.
 *
 * @param  string  $expected
 * @param  string  $actual
 * @param  string  $message
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 * @since  Method available since Release 3.2.14
 */
function assertFileNotEquals($expected, $actual, $message = '', $canonicalize = FALSE, $ignoreCase = FALSE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertFileNotEquals'), $args);
}

/**
 * Asserts that a file does not exist.
 *
 * @param  string $filename
 * @param  string $message
 * @since  Method available since Release 3.0.0
 */
function assertFileNotExists($filename, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertFileNotExists'), $args);
}

/**
 * Asserts that a value is greater than another value.
 *
 * @param  mixed   $expected
 * @param  mixed   $actual
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertGreaterThan($expected, $actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertGreaterThan'), $args);
}

/**
 * Asserts that a value is greater than or equal to another value.
 *
 * @param  mixed   $expected
 * @param  mixed   $actual
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertGreaterThanOrEqual($expected, $actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertGreaterThanOrEqual'), $args);
}

/**
 * Asserts that a variable is of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertInstanceOf($expected, $actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertInstanceOf'), $args);
}

/**
 * Asserts that a variable is of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertInternalType($expected, $actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertInternalType'), $args);
}

/**
 * Asserts that a value is smaller than another value.
 *
 * @param  mixed   $expected
 * @param  mixed   $actual
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertLessThan($expected, $actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertLessThan'), $args);
}

/**
 * Asserts that a value is smaller than or equal to another value.
 *
 * @param  mixed   $expected
 * @param  mixed   $actual
 * @param  string  $message
 * @since  Method available since Release 3.1.0
 */
function assertLessThanOrEqual($expected, $actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertLessThanOrEqual'), $args);
}

/**
 * Asserts that a haystack does not contain a needle.
 *
 * @param  mixed   $needle
 * @param  mixed   $haystack
 * @param  string  $message
 * @param  boolean $ignoreCase
 * @since  Method available since Release 2.1.0
 */
function assertNotContains($needle, $haystack, $message = '', $ignoreCase = FALSE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertNotContains'), $args);
}

/**
 * Asserts that a haystack does not contain only values of a given type.
 *
 * @param  string  $type
 * @param  mixed   $haystack
 * @param  boolean $isNativeType
 * @param  string  $message
 * @since  Method available since Release 3.1.4
 */
function assertNotContainsOnly($type, $haystack, $isNativeType = NULL, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertNotContainsOnly'), $args);
}

/**
 * Asserts that a variable is not empty.
 *
 * @param  mixed   $actual
 * @param  string  $message
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertNotEmpty($actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertNotEmpty'), $args);
}

/**
 * Asserts that two variables are not equal.
 *
 * @param  mixed   $expected
 * @param  mixed   $actual
 * @param  string  $message
 * @param  float   $delta
 * @param  integer $maxDepth
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 * @since  Method available since Release 2.3.0
 */
function assertNotEquals($expected, $actual, $message = '', $delta = 0, $maxDepth = 10, $canonicalize = FALSE, $ignoreCase = FALSE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertNotEquals'), $args);
}

/**
 * Asserts that a variable is not of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertNotInstanceOf($expected, $actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertNotInstanceOf'), $args);
}

/**
 * Asserts that a variable is not of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
 * @since Method available since Release 3.5.0
 */
function assertNotInternalType($expected, $actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertNotInternalType'), $args);
}

/**
 * Asserts that a variable is not NULL.
 *
 * @param  mixed  $actual
 * @param  string $message
 */
function assertNotNull($actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertNotNull'), $args);
}

/**
 * Asserts that a string does not match a given regular expression.
 *
 * @param  string $pattern
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 2.1.0
 */
function assertNotRegExp($pattern, $string, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertNotRegExp'), $args);
}

/**
 * Asserts that two variables do not have the same type and value.
 * Used on objects, it asserts that two variables do not reference
 * the same object.
 *
 * @param  mixed  $expected
 * @param  mixed  $actual
 * @param  string $message
 */
function assertNotSame($expected, $actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertNotSame'), $args);
}

/**
 * This assertion is the exact opposite of assertTag().
 *
 * Rather than asserting that $matcher results in a match, it asserts that
 * $matcher does not match.
 *
 * @param  array   $matcher
 * @param  string  $actual
 * @param  string  $message
 * @param  boolean $isHtml
 * @since  Method available since Release 3.3.0
 * @author Mike Naberezny <mike@maintainable.com>
 * @author Derek DeVries <derek@maintainable.com>
 */
function assertNotTag($matcher, $actual, $message = '', $isHtml = TRUE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertNotTag'), $args);
}

/**
 * Asserts that a variable is not of a given type.
 *
 * @param  string $expected
 * @param  mixed  $actual
 * @param  string $message
 * @since  Method available since Release 2.2.0
 */
function assertNotType($expected, $actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertNotType'), $args);
}

/**
 * Asserts that a variable is NULL.
 *
 * @param  mixed  $actual
 * @param  string $message
 */
function assertNull($actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertNull'), $args);
}

/**
 * Asserts that an object has a specified attribute.
 *
 * @param  string $attributeName
 * @param  object $object
 * @param  string $message
 * @since  Method available since Release 3.0.0
 */
function assertObjectHasAttribute($attributeName, $object, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertObjectHasAttribute'), $args);
}

/**
 * Asserts that an object does not have a specified attribute.
 *
 * @param  string $attributeName
 * @param  object $object
 * @param  string $message
 * @since  Method available since Release 3.0.0
 */
function assertObjectNotHasAttribute($attributeName, $object, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertObjectNotHasAttribute'), $args);
}

/**
 * Asserts that a string matches a given regular expression.
 *
 * @param  string $pattern
 * @param  string $string
 * @param  string $message
 */
function assertRegExp($pattern, $string, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertRegExp'), $args);
}

/**
 * Asserts that two variables have the same type and value.
 * Used on objects, it asserts that two variables reference
 * the same object.
 *
 * @param  mixed  $expected
 * @param  mixed  $actual
 * @param  string $message
 */
function assertSame($expected, $actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertSame'), $args);
}

/**
 * Assert the presence, absence, or count of elements in a document matching
 * the CSS $selector, regardless of the contents of those elements.
 *
 * The first argument, $selector, is the CSS selector used to match
 * the elements in the $actual document.
 *
 * The second argument, $count, can be either boolean or numeric.
 * When boolean, it asserts for presence of elements matching the selector
 * (TRUE) or absence of elements (FALSE).
 * When numeric, it asserts the count of elements.
 *
 * assertSelectCount("#binder", true, $xml);  // any?
 * assertSelectCount(".binder", 3, $xml); // exactly 3?
 *
 * @param  array   $selector
 * @param  integer $count
 * @param  mixed   $actual
 * @param  string  $message
 * @param  boolean $isHtml
 * @since  Method available since Release 3.3.0
 * @author Mike Naberezny <mike@maintainable.com>
 * @author Derek DeVries <derek@maintainable.com>
 */
function assertSelectCount($selector, $count, $actual, $message = '', $isHtml = TRUE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertSelectCount'), $args);
}

/**
 * assertSelectEquals("#binder .name", "Chuck", true,  $xml);  // any?
 * assertSelectEquals("#binder .name", "Chuck", false, $xml);  // none?
 *
 * @param  array   $selector
 * @param  string  $content
 * @param  integer $count
 * @param  mixed   $actual
 * @param  string  $message
 * @param  boolean $isHtml
 * @since  Method available since Release 3.3.0
 * @author Mike Naberezny <mike@maintainable.com>
 * @author Derek DeVries <derek@maintainable.com>
 */
function assertSelectEquals($selector, $content, $count, $actual, $message = '', $isHtml = TRUE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertSelectEquals'), $args);
}

/**
 * assertSelectRegExp("#binder .name", "/Mike|Derek/", true, $xml); // any?
 * assertSelectRegExp("#binder .name", "/Mike|Derek/", 3, $xml);// 3?
 *
 * @param  array   $selector
 * @param  string  $pattern
 * @param  integer $count
 * @param  mixed   $actual
 * @param  string  $message
 * @param  boolean $isHtml
 * @since  Method available since Release 3.3.0
 * @author Mike Naberezny <mike@maintainable.com>
 * @author Derek DeVries <derek@maintainable.com>
 */
function assertSelectRegExp($selector, $pattern, $count, $actual, $message = '', $isHtml = TRUE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertSelectRegExp'), $args);
}

/**
 * Asserts that a string ends not with a given prefix.
 *
 * @param  string $suffix
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.4.0
 */
function assertStringEndsNotWith($suffix, $string, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertStringEndsNotWith'), $args);
}

/**
 * Asserts that a string ends with a given prefix.
 *
 * @param  string $suffix
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.4.0
 */
function assertStringEndsWith($suffix, $string, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertStringEndsWith'), $args);
}

/**
 * Asserts that the contents of a string is equal
 * to the contents of a file.
 *
 * @param  string  $expectedFile
 * @param  string  $actualString
 * @param  string  $message
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 * @since  Method available since Release 3.3.0
 */
function assertStringEqualsFile($expectedFile, $actualString, $message = '', $canonicalize = FALSE, $ignoreCase = FALSE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertStringEqualsFile'), $args);
}

/**
 * Asserts that a string matches a given format string.
 *
 * @param  string $format
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.5.0
 */
function assertStringMatchesFormat($format, $string, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertStringMatchesFormat'), $args);
}

/**
 * Asserts that a string matches a given format file.
 *
 * @param  string $formatFile
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.5.0
 */
function assertStringMatchesFormatFile($formatFile, $string, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertStringMatchesFormatFile'), $args);
}

/**
 * Asserts that the contents of a string is not equal
 * to the contents of a file.
 *
 * @param  string  $expectedFile
 * @param  string  $actualString
 * @param  string  $message
 * @param  boolean $canonicalize
 * @param  boolean $ignoreCase
 * @since  Method available since Release 3.3.0
 */
function assertStringNotEqualsFile($expectedFile, $actualString, $message = '', $canonicalize = FALSE, $ignoreCase = FALSE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertStringNotEqualsFile'), $args);
}

/**
 * Asserts that a string does not match a given format string.
 *
 * @param  string $format
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.5.0
 */
function assertStringNotMatchesFormat($format, $string, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertStringNotMatchesFormat'), $args);
}

/**
 * Asserts that a string does not match a given format string.
 *
 * @param  string $formatFile
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.5.0
 */
function assertStringNotMatchesFormatFile($formatFile, $string, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertStringNotMatchesFormatFile'), $args);
}

/**
 * Asserts that a string starts not with a given prefix.
 *
 * @param  string $prefix
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.4.0
 */
function assertStringStartsNotWith($prefix, $string, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertStringStartsNotWith'), $args);
}

/**
 * Asserts that a string starts with a given prefix.
 *
 * @param  string $prefix
 * @param  string $string
 * @param  string $message
 * @since  Method available since Release 3.4.0
 */
function assertStringStartsWith($prefix, $string, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertStringStartsWith'), $args);
}

/**
 * Evaluate an HTML or XML string and assert its structure and/or contents.
 *
 * The first argument ($matcher) is an associative array that specifies the
 * match criteria for the assertion:
 *
 *  - `id`   : the node with the given id attribute must match the
 * corresponsing value.
 *  - `tag`  : the node type must match the corresponding value.
 *  - `attributes`   : a hash. The node's attributres must match the
 * corresponsing values in the hash.
 *  - `content`  : The text content must match the given value.
 *  - `parent`   : a hash. The node's parent must match the
 * corresponsing hash.
 *  - `child`: a hash. At least one of the node's immediate children
 * must meet the criteria described by the hash.
 *  - `ancestor` : a hash. At least one of the node's ancestors must
 * meet the criteria described by the hash.
 *  - `descendant`   : a hash. At least one of the node's descendants must
 * meet the criteria described by the hash.
 *  - `children` : a hash, for counting children of a node.
 * Accepts the keys:
 *- `count`: a number which must equal the number of children
 *   that match
 *- `less_than`: the number of matching children must be greater
 *   than this number
 *- `greater_than` : the number of matching children must be less than
 *   this number
 *- `only` : another hash consisting of the keys to use to match
 *   on the children, and only matching children will be
 *   counted
 *
 * <code>
 * // Matcher that asserts that there is an element with an id="my_id".
 * $matcher = array('id' => 'my_id');
 *
 * // Matcher that asserts that there is a "span" tag.
 * $matcher = array('tag' => 'span');
 *
 * // Matcher that asserts that there is a "span" tag with the content
 * // "Hello World".
 * $matcher = array('tag' => 'span', 'content' => 'Hello World');
 *
 * // Matcher that asserts that there is a "span" tag with content matching
 * // the regular expression pattern.
 * $matcher = array('tag' => 'span', 'content' => '/Try P(HP|ython)/');
 *
 * // Matcher that asserts that there is a "span" with an "list" class
 * // attribute.
 * $matcher = array(
 *   'tag'=> 'span',
 *   'attributes' => array('class' => 'list')
 * );
 *
 * // Matcher that asserts that there is a "span" inside of a "div".
 * $matcher = array(
 *   'tag'=> 'span',
 *   'parent' => array('tag' => 'div')
 * );
 *
 * // Matcher that asserts that there is a "span" somewhere inside a
 * // "table".
 * $matcher = array(
 *   'tag'  => 'span',
 *   'ancestor' => array('tag' => 'table')
 * );
 *
 * // Matcher that asserts that there is a "span" with at least one "em"
 * // child.
 * $matcher = array(
 *   'tag'   => 'span',
 *   'child' => array('tag' => 'em')
 * );
 *
 * // Matcher that asserts that there is a "span" containing a (possibly
 * // nested) "strong" tag.
 * $matcher = array(
 *   'tag'=> 'span',
 *   'descendant' => array('tag' => 'strong')
 * );
 *
 * // Matcher that asserts that there is a "span" containing 5-10 "em" tags
 * // as immediate children.
 * $matcher = array(
 *   'tag'  => 'span',
 *   'children' => array(
 * 'less_than'=> 11,
 * 'greater_than' => 4,
 * 'only' => array('tag' => 'em')
 *   )
 * );
 *
 * // Matcher that asserts that there is a "div", with an "ul" ancestor and
 * // a "li" parent (with class="enum"), and containing a "span" descendant
 * // that contains an element with id="my_test" and the text "Hello World".
 * $matcher = array(
 *   'tag'=> 'div',
 *   'ancestor'   => array('tag' => 'ul'),
 *   'parent' => array(
 * 'tag'=> 'li',
 * 'attributes' => array('class' => 'enum')
 *   ),
 *   'descendant' => array(
 * 'tag'   => 'span',
 * 'child' => array(
 *   'id'  => 'my_test',
 *   'content' => 'Hello World'
 * )
 *   )
 * );
 *
 * // Use assertTag() to apply a $matcher to a piece of $html.
 * $this->assertTag($matcher, $html);
 *
 * // Use assertTag() to apply a $matcher to a piece of $xml.
 * $this->assertTag($matcher, $xml, '', FALSE);
 * </code>
 *
 * The second argument ($actual) is a string containing either HTML or
 * XML text to be tested.
 *
 * The third argument ($message) is an optional message that will be
 * used if the assertion fails.
 *
 * The fourth argument ($html) is an optional flag specifying whether
 * to load the $actual string into a DOMDocument using the HTML or
 * XML load strategy.  It is TRUE by default, which assumes the HTML
 * load strategy.  In many cases, this will be acceptable for XML as well.
 *
 * @param  array   $matcher
 * @param  string  $actual
 * @param  string  $message
 * @param  boolean $isHtml
 * @since  Method available since Release 3.3.0
 * @author Mike Naberezny <mike@maintainable.com>
 * @author Derek DeVries <derek@maintainable.com>
 */
function assertTag($matcher, $actual, $message = '', $isHtml = TRUE)
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertTag'), $args);
}

/**
 * Evaluates a PHPUnit_Framework_Constraint matcher object.
 *
 * @param  mixed$value
 * @param  PHPUnit_Framework_Constraint $constraint
 * @param  string   $message
 * @since  Method available since Release 3.0.0
 */
function assertThat($value, $constraint, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertThat'), $args);
}

/**
 * Asserts that a condition is true.
 *
 * @param  boolean $condition
 * @param  string  $message
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertTrue($condition, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertTrue'), $args);
}

/**
 * Asserts that a variable is of a given type.
 *
 * @param  string $expected
 * @param  mixed  $actual
 * @param  string $message
 */
function assertType($expected, $actual, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertType'), $args);
}

/**
 * Asserts that two XML files are equal.
 *
 * @param  string $expectedFile
 * @param  string $actualFile
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertXmlFileEqualsXmlFile($expectedFile, $actualFile, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertXmlFileEqualsXmlFile'), $args);
}

/**
 * Asserts that two XML files are not equal.
 *
 * @param  string $expectedFile
 * @param  string $actualFile
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertXmlFileNotEqualsXmlFile($expectedFile, $actualFile, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertXmlFileNotEqualsXmlFile'), $args);
}

/**
 * Asserts that two XML documents are equal.
 *
 * @param  string $expectedFile
 * @param  string $actualXml
 * @param  string $message
 * @since  Method available since Release 3.3.0
 */
function assertXmlStringEqualsXmlFile($expectedFile, $actualXml, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertXmlStringEqualsXmlFile'), $args);
}

/**
 * Asserts that two XML documents are equal.
 *
 * @param  string $expectedXml
 * @param  string $actualXml
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertXmlStringEqualsXmlString($expectedXml, $actualXml, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertXmlStringEqualsXmlString'), $args);
}

/**
 * Asserts that two XML documents are not equal.
 *
 * @param  string $expectedFile
 * @param  string $actualXml
 * @param  string $message
 * @since  Method available since Release 3.3.0
 */
function assertXmlStringNotEqualsXmlFile($expectedFile, $actualXml, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertXmlStringNotEqualsXmlFile'), $args);
}

/**
 * Asserts that two XML documents are not equal.
 *
 * @param  string $expectedXml
 * @param  string $actualXml
 * @param  string $message
 * @since  Method available since Release 3.1.0
 */
function assertXmlStringNotEqualsXmlString($expectedXml, $actualXml, $message = '')
{
    $args = func_get_args();
    call_user_func_array(array('PHPUnit_Framework_Assert', 'assertXmlStringNotEqualsXmlString'), $args);
}
