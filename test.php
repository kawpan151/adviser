<?php
class Calculate {
         public function add($a, $B) {
                 return $a + $b;
         }
}
class MyTest extends PHPUnit_Framework_TestCase {
         public function testAdd() {
                 $object = new Calculate;
                 $result = $object->add(1, 2);
                 $this->assertEquals(3, $result);
         }
}
?>