<?php

namespace App\Command;

use App\Generator\PostGenerator;
use Infrastructure\Repository\PostRepositoryInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GeneratePostCommand extends Command
{
    protected static $defaultName = 'app:generate-post';
    protected static $defaultDescription = 'Run app:generate-post';

    private PostRepositoryInterface $repository;
    private PostGenerator $generator;

    public function __construct(PostGenerator $generator, PostRepositoryInterface $repository, string $name = null)
    {
        parent::__construct($name);
        $this->generator = $generator;
        $this->repository = $repository;
    }

    protected function configure(): void
    {
        $this->addOption('summary', 's', InputOption::VALUE_NONE, 'Specify if this should be a summary post.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $post = $this->generator->generate($input->getOption('summary'));

        $this->repository->add($post, true);

        $output->writeln('A post has been generated.');

        return Command::SUCCESS;
    }
}
