@servers(['web' => ['-A -p 22 -l user host']])

@task('deploy', ['on' => 'web'])
    cd path
    git pull origin master
    composer install -n --no-dev
@endtask