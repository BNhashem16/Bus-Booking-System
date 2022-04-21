# git
alias g="git"
alias gs="git status"
alias gc="git checkout"
alias checkout='function _checkout(){ git checkout $1; };_checkout'

# alias ga="git add ."
# alias gc="git commit -m $commit"
# alias push="git add . && git commit -m $1 && git push"
alias pull="git pull"


alias push='function _push(){ git add .; git commit -m $1; git push; };_push'


# laravel --> php artisan
alias art="php artisan"
alias p="php artisan"
alias pa="php artisan"
alias artisan="php artisan"

# laravel --> Tinker
alias t="php artisan tinker"
alias pat="php artisan tinker"
alias artt="php artisan tinker"

# laravel --> Controller
alias mc="php artisan make:controller"
alias mcr="php artisan make:controller --resource"
alias mcrR="php artisan make:controller --resource --requests"
alias mci="php artisan make:controller --invokable"

# laravel --> Database
alias mm="php artisan make:migration"
alias migrate="php artisan migrate"
alias mfs="php artisan migrate:fresh --seed"
alias mr="php artisan migrate:refresh"

# laravel --> Installation
alias laravel-installer="composer create-project --prefer-dist laravel/laravel"


# laravel --> Serve
alias serve="php artisan serve"

# laravel --> Model
alias model-all="php artisan make:model -a --requests"

# laravel --> Logs
alias rmlogs="rm storage/logs/*.log"
alias viewlog='tail -f -n 450 storage/logs/laravel*.log \
| grep -i -E \
"^\[\d{4}\-\d{2}\-\d{2} \d{2}:\d{2}:\d{2}\]|Next [\w\W]+?\:" \
--color'

# Composer
alias cdo="composer dump-autoload -o"
alias ci="composer install"
alias co="composer outdated"
alias cu="composer update"



# other
alias c=clear
alias sd="start ."
alias ll='ls -lah'
alias ..='cd ..'
alias bash='/git-bash.exe &'
alias b='bash'
alias _='sudo'
alias copyssh="pbcopy < $HOME/.ssh/id_rsa.pub"
alias upalias="source ~/.bash_profile"