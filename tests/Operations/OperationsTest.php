<?php
use ApaiIO\Request\Util;
use ApaiIO\Operations\Search;
/*
 * Copyright 2013 Jan Eichhorn <exeu65@googlemail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

class OperationsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testSearchException()
    {
        $search = new Search();
        $search->setPage(11);
    }

    public function testSearchValidPage()
    {
        $search = new Search();
        $search->setPage(1);

        $this->assertEquals(1, $search->getItemPage());
    }
}