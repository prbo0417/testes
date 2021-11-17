<?php
$dados = ['salmon','tilapia','sardine','whiting','hake','golden','croaker','mackerel','catfish'];
$objArray = new ArrayObject( $dados );

//add value to end array
$objArray->append('cod');

//access array value by index
print $objArray->offsetGet(2) . '<br>';

//add value to a given index
$objArray->offsetSet(2,'halibut');

//eliminate vector position
$objArray->offsetUnset(4);

//count itens of array
print $objArray->count() . '<br>'; 

$objArray[] = 'tuna';

//ordenate array
$objArray->natsort();
//iterate object
foreach($objArray as $item)
{
    print 'Item: ' . $item . '<br>';
}

if($objArray->offsetExists(5))
{
    print 'Position 5 founded';
}
echo '<br><br>';
print $objArray->serialize();