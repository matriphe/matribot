@servers(['web' => ['-A -p 22 -l user host']])

@task('deploy', ['on' => 'web'])
    cd matribot
    git pull origin master
    composer install -n --no-dev
@endtask

@task('install', ['on' => 'web'])
    composer create-project matriphe/matribot --prefer-dist
@endtask