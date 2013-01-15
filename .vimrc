:set nocompatible
" display
" ----------------------
set number
set ruler
set cmdheight=2
set laststatus=2
set statusline=%<%f\
set statusline=%<%f\ %m%r%h%w%{'['.(&fenc!=''?&fenc:&enc).']['.&ff.']'}%=%l,%c%V%8P
set title
set linespace=0
set wildmenu
set showcmd
"set textwidth=78
"set columns=100
"set lines=150


" syntax color
" ---------------------
syntax on
colorscheme ron
highlight LineNr ctermfg=darkgrey

" search
" ----------------------
set ignorecase
set smartcase
set wrapscan
set hlsearch


" edit
" ---------------------
set autoindent
set cindent
set showmatch
set backspace=indent,eol,start
set clipboard=unnamed
set pastetoggle=<F12>
set guioptions+=a


" tab
" --------------------
set tabstop=4
set expandtab
set smarttab
set shiftwidth=4
set shiftround
set nowrap

" backup
" --------------------
set backup
set backupdir=~/vim_backup
set swapfile
set directory=~/vim_swap

:set encoding=utf-8
:set fileencodings=ucs-bom,iso-2022-jp-3,iso-2022-jp,eucjp-ms,euc-jisx0213,euc-jp,sjis,cp932,utf-8
