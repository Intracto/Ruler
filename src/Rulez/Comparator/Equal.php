<?php

namespace Rulez\Comparator;

/**
 * Equal
 *
 * @uses AbstractComparator
 * @uses ComparatorInterface
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class Equal extends AbstractComparator implements ComparatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getToken()
    {
        return '=';
    }

    /**
     * {@inheritdoc}
     */
    public function assert()
    {
        return $this->left == $this->right;
    }
}
