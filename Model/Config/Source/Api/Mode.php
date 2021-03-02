<?php
/**
 * Copyright (c) 2021 Hawksearch (www.hawksearch.com) - All Rights Reserved
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 */
declare(strict_types=1);

namespace HawkSearch\Connector\Model\Config\Source\Api;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class Mode
 * Source provider for system config field hawksearch_connector/api_settings/mode
 */
class Mode implements OptionSourceInterface
{
    /**
     * @inheritDoc
     */
    public function toOptionArray() : array
    {
        return [
            [
                'value' => 'develop',
                'label' => __('Development')
            ],
            [
                'value' => 'staging',
                'label' => __('Staging')
            ],
            [
                'value' => 'production',
                'label' => __('Production')
            ]
        ];
    }
}
