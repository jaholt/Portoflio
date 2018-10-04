<?php

use PHPUnit\Framework\TestCase;

require ('../functions.php');

class StackTest extends TestCase
{

    /*
     * This success test checks whether the function returns a string as expected
     */
    public function testArrayToTextSuccess()
    {
        $expected = "Some words in a string";
        $example = [0 => ["key" => "Some words in a string"]];
        $example2 = "key";
        $case = arrayToText($example, $example2);
        $this->assertEquals($case, $expected);
    }

    /*
     * This failure test checks whether the function returns a string as expected
     */
    public function testArrayToTextFailure()
    {
        $expected = "this isn't an array";
        $example = ["key" => "Some words in a string"];
        $example2 = "key";
        $case = arrayToText($example, $example2);
        $this->assertEquals($case, $expected);
    }

    /*
     * This success test checks whether the function returns a string of html
     */
    public function testProduceProjectSuccess()
    {
        $expected = '<div class="pilotShopBox"><h3>title</h3><p>fillText</p><a href=url>CLICK HERE to view</a></div>';
        $example = [0 => ['title' => 'title', 'fillText' => 'fillText', 'url' => 'url']];
        $case = produceProject($example);
        $this->assertEquals($case, $expected);
    }

    /*
     * This failure test checks whether the function returns the if statement failure string
     */
    public function testProduceProjectFailure()
    {
        $expected = "this isn't the expected piece of data, array or otherwise";
        $example = ['key' => 'toby'];
        $case = produceProject($example);
        $this->assertEquals($case, $expected);
    }

    /*
     * This success test checks whether the function returns a string of html
     */
    public function testPrintAdminProjectsSuccess()
    {
        $expected = 'ID: id<br>title<br>fillText<br>url<br>';
        $example = [0 => ['id' => 'id', 'title' => 'title', 'fillText' => 'fillText', 'url' => 'url']];
        $case = printAdminProjects($example);
        $this->assertEquals($case, $expected);
    }

    /*
     * This success test checks whether the function returns a string of html
     */
    public function testPrintAdminProjectsFailure()
    {
        $expected = 'the projects array has not been entered correctly';
        $example = ['id' => 'id', 'title' => 'title', 'fillText' => 'fillText', 'url' => 'url'];
        $case = printAdminProjects($example);
        $this->assertEquals($case, $expected);
    }
}