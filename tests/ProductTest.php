<?php
namespace Code;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testSeNomeDoProdutoESetadoCorretamente(): void
    {
        $p = new Product();
        $p->setName('Produto 01');

        $this->assertEquals('Produto 01', $p->getName(), 'Valores não são iguais');
    }

    public function testSePrecoDoProdutoESetadoCorretamente(): void
    {
        $p = new Product();
        $p->setPrice('10.00');

        $this->assertEquals('10.00', $p->getPrice(), 'Valores não são iguais');
    }

    public function testSeSlugDoProdutoESetadoCorretamente(): void
    {
        $p = new Product();
        $p->setSlug('produto-01');

        $this->assertEquals('produto-01', $p->getSlug(), 'Valores não são iguais');
    }
}
