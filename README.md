# install in cmd
ก่อนอื่นต้องสร้าง databate ชื่อ login_api ตามด้วยตาราง ใน file login_api.sql ครับ  
มีสองวิธีเลือกแค่ 1 วิธี
### 1  commands in two line in CMD:
   ทำทีละขั้นตอน
   #### 
    set _line=DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=login_api DB_USERNAME=root DB_PASSWORD=   MEMCACHED_HOST=127.0.0.1 REDIS_HOST=127.0.0.1   private_key_maleeta="maleetatoei"
   #### 
    git init &git remote add production https://github.com/Horizen23/laravel-maleeta.git&git pull production master& composer install --optimize-autoloader --no-dev & move .env.example .env &echo %_line: = >>.env &echo;%>>.env& php artisan key:generate & php artisan migrate & php artisan config:cache & php artisan route:cache & php artisan view:cache & php artisan storage:link & start "google" "c:\program files (x86)\Google\Chrome\Application\chrome.exe" "http://127.0.0.1:8000/" & php artisan serv 



### 2 commands in one line in CMD:
    git init &&git remote add production https://github.com/Horizen23/laravel-maleeta.git&git pull production master&& composer install --optimize-autoloader --no-dev && move .env.example .env &&echo DB_CONNECTION=mysql  >>.env &&echo DB_HOST=127.0.0.1  >>.env &&echo DB_PORT=3306  >>.env &&echo DB_DATABASE=login_api >>.env &&echo DB_USERNAME=root >>.env &&echo DB_PASSWORD= >>.env &echo private_key_maleeta = "maleetatoei" >>.env &&php artisan key:generate & php artisan migrate & php artisan config:cache & php artisan route:cache & php artisan view:cache & php artisan storage:link & start "google" "c:\program files (x86)\Google\Chrome\Application\chrome.exe" "http://127.0.0.1:8000/" & php artisan serv 
  
## List of commands:

 ###  Local:

- git init
- git add .
- git remote add production https//githubcom/XXX/XXXX.git
- git remote -v
- git commit -m "first commit"
- git push production master

###  Production:

- git init
- git remote add production https://github.com/Horizen23/laravel-maleeta.git
- git pull production master
- composer install --optimize-autoloader --no-dev
- mv .env.example .env
- vim .env
- php artisan key:generate
- php artisan migrate
- php artisan config:cache
- php artisan route:cache
- php artisan view:cache
- php artisan storage:link
- cd ..
- ln -s larasocketdemo/public chatapp
- git difftool head head1
- git --oneline 
- git push production toei


###  config vs code :

- git config --global -e /*ดู config*/

- git config --global core.editor "code --wait"

- git config --global core.editor "code --wait --new-window"
- git config --global --unset core.editor
- git config --global diff.tool vscode
- git config --global difftool.vscode.cmd "code --wait --diff $LOCAL $REMOTE"

- git config --global merge.tool vscode
- git config --global mergetool.vscode.cmd "code --wait $MERGED"





อ้างอิง : https://roboleary.net/vscode/2020/09/15/vscode-git.html

อ้างอิง : https://github.com/github/gitignore
  
  
