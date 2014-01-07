<?php

/**
 * Hoa
 *
 *
 * @license
 *
 * New BSD License
 *
 * Copyright © 2007-2014, Ivan Enderlin. All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *     * Redistributions of source code must retain the above copyright
 *       notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *     * Neither the name of the Hoa nor the names of its contributors may be
 *       used to endorse or promote products derived from this software without
 *       specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDERS AND CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

namespace {

from('Hoa')

/**
 * \Hoa\Xyl\Element\Concrete
 */
-> import('Xyl.Element.Concrete');

}

namespace Hoa\Xyl\Interpreter {

/**
 * Class \Hoa\Xyl\Interpreter.
 *
 * Abstract interpreter.
 *
 * @author     Ivan Enderlin <ivan.enderlin@hoa-project.net>
 * @copyright  Copyright © 2007-2014 Ivan Enderlin.
 * @license    New BSD License
 */

abstract class Interpreter {

    /**
     * Rank: abstract elements to concrete elements.
     *
     * @var \Hoa\Xyl\Interpreter array
     */
    protected $_rank         = array();

    /**
     * Resource path.
     *
     * @var \Hoa\Xyl\Interpreter string
     */
    protected $_resourcePath = null;



    /**
     * Construct interpreter.
     *
     * @access  public
     * @param   array  $rank    Rank.
     * @return  void
     */
    public function __construct ( Array $rank = array() ) {

        $this->setComponents($rank);

        return;
    }

    /**
     * Set ranks.
     *
     * @access  public
     * @param   array  $rank    Ranks.
     * @return  void
     */
    public function setComponents ( Array $rank ) {

        foreach($rank as $element => $component)
            $this->setComponent($element, $component);

        return;
    }

    /**
     * Set rank.
     *
     * @access  public
     * @param   array  $element      Element.
     * @param   array  $component    Classname of the component.
     * @return  void
     */
    public function setComponent ( $element, $component ) {

        $this->_rank[$element] = $component;

        return;
    }

    /**
     * Get rank.
     *
     * @access  public
     * @return  array
     */
    public function getRank ( ) {

        return $this->_rank;
    }

    /**
     * Get resource path.
     *
     * @access  public
     * @return  string
     */
    public function getResourcePath ( ) {

        return $this->_resourcePath;
    }
}

}

namespace {

/**
 * Flex entity.
 */
Hoa\Core\Consistency::flexEntity('Hoa\Xyl\Interpreter\Interpreter');

}
