<?php

namespace Code;

use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    // Manipular varios produtos
    // Visualizar produtos
    // Total de produtos | Total compra

    public function testSeClasseCarrinhoExiste(): void
    {
        $class = class_exists('\\Code\\Cart');
        $this->assertTrue($class);
    }

    public function testAdicionarProdutosNoCarrinho()
    {
        $p = new Product();
        $p->setName('P 01');
        $p->setPrice(10.91);
        $p->setSlug('p-01');

        $p2 = new Product();
        $p2->setName('P 02');
        $p2->setPrice(10.92);
        $p2->setSlug('p-02');

        $c = new Cart();
        $c->addProduct($p);
        $c->addProduct($p2);

        $this->assertIsArray($c->getProduct());
        $this->assertInstanceOf(Product::class, $c->getProduct()[0]);
        $this->assertInstanceOf(Product::class, $c->getProduct()[1]);
    }

    public function testSeValoresDeProdutosNoCarrinhoEstaoCorretosConformePassados()
    {
        $p = new Product();
        $p->setName('P 01');
        $p->setPrice(10.91);
        $p->setSlug('p-01');

        $c = new Cart();
        $c->addProduct($p);

        $this->assertEquals('P 01', $c->getProduct()[0]->getName());
        $this->assertEquals(10.91, $c->getProduct()[0]->getPrice());
        $this->assertEquals('p-01', $c->getProduct()[0]->getSlug());
    }

    public function testSeTotalProdutosEValorCompraEstaoCorretos()
    {
        $p = new Product();
        $p->setName('P 01');
        $p->setPrice(10.91);
        $p->setSlug('p-01');

        $p2 = new Product();
        $p2->setName('P 02');
        $p2->setPrice(10.92);
        $p2->setSlug('p-02');

        $c = new Cart();
        $c->addProduct($p);
        $c->addProduct($p2);

        $this->assertEquals(2, $c->getTotalProducts());
        $this->assertEquals(21.83, $c->getTotalPrice());
    }
}
