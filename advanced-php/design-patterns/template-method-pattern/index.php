<?php
/*
 * the Template Method pattern defines the overall structure of an algorithm in a superclass,
 *  and the method definitions specify the inputs and outputs of the methods, but the actual
 * implementations of the methods are left to be defined by subclasses.
 */

require 'vendor/autoload.php';

(new Myapp\TurkeySub())->make();