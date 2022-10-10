<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Controller\RegistrationController;


class UserRegistration extends Command
{
    private $registrationRepository;

    protected static $defaultName = 'app:user:registration';

    public function __construct(RegistrationController $registrationRepository)
    {
        $this->registrationRepository = $registrationRepository;

        parent::__construct();
    }
    protected function configure(): void
    {
        $this
            ->setDescription('Fetch new through API')
            ->addOption('dry-run', null, InputOption::VALUE_NONE, 'Dry run')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        if ($input->getOption('dry-run')) {
            $io->note('Dry mode enabled');


        } else {
            $this->registrationRepository->index();
        }

        $io->success(sprintf('Record successfully updated'));

        return 0;
    }
}
