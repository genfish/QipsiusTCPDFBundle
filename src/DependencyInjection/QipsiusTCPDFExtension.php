<?php

namespace Qipsius\TCPDFBundle\src\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class QipsiusTCPDFExtension extends Extension
{
    /**
     * Load our configuration.
     *
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $configuration = $this->getConfiguration($configs, $container);
        $config        = $this->processConfiguration($configuration, $configs);

        $container->setParameter('qipsius_tcpdf.file', $config['file']);
        $container->setParameter('qipsius_tcpdf.class', $config['class']);
        $container->setParameter('qipsius_tcpdf.tcpdf', $config['tcpdf']);
    }
}
