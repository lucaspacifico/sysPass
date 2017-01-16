<?php
/**
 * sysPass
 *
 * @author    nuxsmin
 * @link      http://syspass.org
 * @copyright 2012-2017, Rubén Domínguez nuxsmin@$syspass.org
 *
 * This file is part of sysPass.
 *
 * sysPass is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * sysPass is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 *  along with sysPass.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace SP\Core\Messages;

/**
 * Class NoticeMessage
 *
 * @package SP\Core\Messages
 */
class NoticeMessage extends MessageBase
{
    /**
     * Componer un mensaje en formato HTML
     *
     * @return string
     */
    public function composeHtml()
    {
        $message[] = '<div class="notice-message">';
        $message[] = '<h1>' . $this->title . '</h1>';
        $message[] = '<p>' . implode('<br>', $this->description) . '</p>';
        $message[] = '<footer>' . $this->footer . '</footer>';
        $message[] = '</div>';

        return implode('', $message);
    }

    /**
     * Componer un mensaje en formato texto
     *
     * @return string
     */
    public function composeText()
    {
        $message[] = $this->title;
        $message[] = implode(PHP_EOL, $this->description);
        $message[] = $this->footer;

        return implode(PHP_EOL, $message);
    }
}