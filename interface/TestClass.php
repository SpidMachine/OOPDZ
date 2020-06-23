<?php

class TestClass
{
    public function run(FileInterface $saver)
    {
        print_r(
            $saver
                ->save(['a', 'b', 'c'])
                ->load()
        );
    }
}