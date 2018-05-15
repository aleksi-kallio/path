<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

/**
 * Class Path Tests
 *
 * @category Rekry
 * @package  Rekry
 * @author   Aleksi Kallio <aleksi.kallio@flashnode.com>
 * @license  GPLv3 https://www.gnu.org/licenses/gpl-3.0.en.html
 * @link     https://flashnode.com
 */
class PathTest extends TestCase {

    /**
     * @var string Path
     */
    private $path;

    /**
     * Sets up the test
     *
     * @return void
     */
    public function setUp() {
        include_once __DIR__ . '/../src/Path.php';
    }

    /**
     * Tests if a simple path can be set
     *
     * @return void
     */
    public function testSimplePath() {
        $this->path = new Path('/test/path');
        $this->assertEquals('/test/path', $this->path->getCurrentPath());
    }

    /**
     * Tests if a simple path can be changed with a child path
     *
     * @return void
     */
    public function testCdPath() {
        $this->path = new Path('/test/path');
        $this->path->cd('cd');
        $this->assertEquals('/test/path/cd', $this->path->getCurrentPath());
    }

    /**
     * Tests if a simple path can be changed with an absolute path
     *
     * @return void
     */
    public function testCdAbsolutePath() {
        $this->path = new Path('/test/path');
        $this->path->cd('/cd');
        $this->assertEquals('/cd', $this->path->getCurrentPath());
    }

    /**
     * Tests if a simple path can be changed with a relative parent path
     *
     * @return void
     */
    public function testCdParentPath() {
        $this->path = new Path('/test/path');
        $this->path->cd('../anotherPath');
        $this->assertEquals('/test/anotherPath', $this->path->getCurrentPath());
    }

    /**
     * Tests if a simple path can be set
     *
     * @return void
     */
    public function testCdComplexPath() {
        $this->path = new Path('/test/path/another/level');
        $this->path->cd('../../confusing/../path');
        $this->assertEquals('/test/path/path', $this->path->getCurrentPath());
    }

    /**
     * Tests if the separator can be changed
     *
     * @return void
     */
    public function testWindowsSeparator() {
        $this->path = new Path('\test\path', '\\');
        $this->path->cd('\cd');
        $this->assertEquals('\cd', $this->path->getCurrentPath());
    }
}