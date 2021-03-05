

# Table of contents

- [Table of contents](#table-of-contents)
- [Github Cheatsheet](#github-cheatsheet)
  - [Commands](#commands)
    - [Generel](#generel)

# Github Cheatsheet

In diesem Cheatsheet werde ich wichtige Git commands behandeln welche ich im Modul 300 benötigen werde. Wichtig zu sagen ist, 

## Commands

### Generel

Mit diesen Commands kann Git zeigen, wer man ist und mehr Infos zum "Author" geben

    git config --global user.name "Christian Schnittert"

    git config --global user.email "christian2424@outlook.de"

Um ein Repository überhaupt zu erstellen kann man mit folgenden Commands ein Repo erstellen oder clonen

    git init
    git clone /pfad/zum/repository
    git clone username@host:/pfad/zum/repository

Um Neuerungen hochzuladen muss man zuerst die Dateien "Adden" um sie anschliessend zu commiten

    git add <filename>
    git add *

    git commit -m "Commit Nachricht"
    git commit -a  (Es wird alles commited)

    git push
