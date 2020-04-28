<?php declare(strict_types = 1);

namespace Maisner\App\Console;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AppTestCommand extends Command {

	public function __construct() {
		parent::__construct('app:test');
	}

	protected function execute(InputInterface $input, OutputInterface $output): int {
		$output->writeln('Success');

		return 0;
	}

}
