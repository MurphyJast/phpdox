<?php
/**
 * Copyright (c) 2011-2014 Arne Blankerts <arne@blankerts.de>
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 *   * Redistributions of source code must retain the above copyright notice,
 *     this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright notice,
 *     this list of conditions and the following disclaimer in the documentation
 *     and/or other materials provided with the distribution.
 *
 *   * Neither the name of Arne Blankerts nor the names of contributors
 *     may be used to endorse or promote products derived from this software
 *     without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT  * NOT LIMITED TO,
 * THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 * PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER ORCONTRIBUTORS
 * BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
 * OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 *
 * @category  PHP
 * @package   TheSeer\fXSL
 * @author    Arne Blankerts <arne@blankerts.de>
 * @copyright Arne Blankerts <arne@blankerts.de>, All rights reserved.
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link      http://github.com/theseer/fxsl
 *
 */

namespace TheSeer\fXSL {

    /**
     * fXSLTProcessorOld
     *
     * API Compatibility wrapper to deal with PHP 8 ./. PHP 7 signature changes
     *
     * @category  PHP
     * @package   TheSeer\fXSL
     * @author    Arne Blankerts <arne@blankerts.de>
     * @access    public
     */
    class fXSLTProcessorOld extends fXSLTProcessorBase {

        public function transformToDoc($node) {
            return parent::internalTransformToDoc($node);
        }

        public function transformToUri($doc, $uri) {
            return parent::internalTransformToUri($doc, $uri);
        }

        public function transformToXml($doc) {
            return parent::internalTransformToXml($doc);
        }

    }

}
