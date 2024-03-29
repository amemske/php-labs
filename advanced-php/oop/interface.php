<?php
interface TableInterface {
    public function save(array $data);
}

interface LogInterface {
    public function log($message);
}


class Table implements TableInterface, LogInterface, Countable {
public function save(array $data) {
    return 'foo';
}
public function log ($message) {
    return $message . "\n";
}

public function count(): int // countable interface is inbuilt
{
    return 10;
}

}

echo (new Table)->save([]); //$table =  new Table(); echo $table->save([]);
echo(new Table())->log('interfaces are awesome');
echo (new Table())->count();