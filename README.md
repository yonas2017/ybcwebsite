# ybcwebsite
Yewongel Berhan Church Web Site

#Removing password requirement when pushing
>> ssh-keygen -t rsa
>> copy /home/abreham/.ssh/id_rsa.pub to your github account rsa settings:https://github.com/settings/keys>
>> git remote set-url origin git+ssh://git@github.com/yonas2017/ybcwebsite.git
>> git remote show origin
