
## How to install
- Get a cup of coffee & some nicotines
- Create .env file
- Pull sub-modules
- Run command "composer i"
- Run command "npm i"
- Run command "npm run dev"

## Deployment
- Generate deploy key
- Add deploy key
- Create ssh config
- Pull project
- Override sub modules url (.gitmodules)
- Install

## Related
#### Sub Modules
* [Landing Page](https://github.com/KMI-UNS-2021-X-CMS/Polres-Landing_page.git)

#### Pull sub-modules via cli
```bash
 git submodule
 git submodule update --init --recursive
```

#### Override sub-module
```
[submodule "name"]
          path = directory/mysubmodule
          url = git@github-sub-module.com:user/repository
```

#### SSH config sample
```
Host github-project.com
        Hostname github.com
        IdentityFile=~/.ssh/your_deploy_key
        
Host github-sub-module.com
        Hostname github.com
        IdentityFile=~/.ssh/your__submodule_deploy_key
```

#### Important Links
* [Generate new ssh key](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent#generating-a-new-ssh-key)
* [Managing deploy key](https://docs.github.com/en/developers/overview/managing-deploy-keys#deploy-keys)
