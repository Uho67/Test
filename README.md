* Task one 'adding meta tag' - Tad is added by plugin Ls\App\Response which checks store and cms_page.
If page is used more than in one store this plugin adds meta tag

_______
* Task two : For changing color of buttons I use Magento_Theme module which adds style and tags to head page,
and this information is stored in core_config_data table , console command set color in this table.


_______
* Task three : I deleted Email and Password fields from shipping step on checkout by using checkout_index_index.xml,
rewrite url was made by override shipping-save-processor/default

