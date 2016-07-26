<?php
/**
 * Title
 *
 * PHP version 5
 *
 * @category    Frontend
 * @package     Xpressengine\Presenter
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html LGPL-2.1
 * @link        https://xpressengine.io
 */

namespace Xpressengine\Presenter\Html\Tags;

/**
 * Title
 *
 * @category    Frontend
 * @package     Xpressengine\Presenter
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html LGPL-2.1
 * @link        https://xpressengine.io
 */
class Title
{
    use EmptyStringTrait;

    /**
     * @var Meta[] $classes $tags[$attributeName][$attributeValue] = $content;
     */
    protected static $title;

    /**
     * @return Meta[]
     */
    public static function output()
    {
        return static::$title;
    }

    /**
     * init 전역 메소드이며, meta 태그 목록을 관리하기 위해 필요한 초기 작업으로
     * tag list를 설정한다.
     *
     * @param string $title title
     *
     * @return void
     */
    public static function init($title = '')
    {
        static::$title = $title;
    }

    /**
     * 생성자. 파일경로를 전달받는다.
     * 단 하나의 파일이나 배열형식의 다중 파일을 전달 받을 수 있다.
     *
     * @param string $title title
     */
    public function __construct($title)
    {
        static::$title = $title;
    }
}
