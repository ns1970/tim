<?php

declare(strict_types=1);

namespace Chenjiacheng\Tim\Traits\TIMMsgElement;

use Chenjiacheng\Tim\Contract\TIMMsgInterface;

class TIMTextElem implements TIMMsgInterface
{
    /**
     * @param string $text 消息内容
     */
    public function __construct(public string $text)
    {
    }

    public function output(): array
    {
        return [
            'MsgType'    => 'TIMTextElem',
            'MsgContent' => [
                'Text' => $this->text
            ]
        ];
    }
}