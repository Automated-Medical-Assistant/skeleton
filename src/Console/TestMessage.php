<?php declare(strict_types=1);

namespace App\Console;

use App\DataTransferObject\TestDataProvider;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\MessageBusInterface;

class TestMessage extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'test:message';

    /**
     * @var \Symfony\Component\Messenger\MessageBusInterface
     */
    private MessageBusInterface $messageBus;

    /**
     * @param \Symfony\Component\Messenger\MessageBusInterface $messageBus
     */
    public function __construct(\Symfony\Component\Messenger\MessageBusInterface $messageBus)
    {
        $this->messageBus = $messageBus;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setDescription('Test message');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $testDataProvider = new TestDataProvider();
        $testDataProvider->setTestInt(time());
        $testDataProvider->setTestString((new \DateTime())->format('Y-m-d H:i:s'));

        $this->messageBus->dispatch($testDataProvider);

        return 0;
    }
}
