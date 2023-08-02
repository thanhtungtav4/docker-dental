<?php
    function removeTagb(){
        if(is_page('cay-ghep-implant-ident')){
            ?>
            <script>
                const targetElements = document.getElementsByClassName('l-video');
                for (const targetElement of targetElements) {
                    const bTags = targetElement.querySelectorAll('b');
                    bTags.forEach((bTag) => {
                        const parent = bTag.parentNode;
                        while (bTag.firstChild) {
                            parent.insertBefore(bTag.firstChild, bTag);
                        }
                        parent.removeChild(bTag);
                    });
                }
            </script>
            <?php
          }
    }
    add_action( 'wp_head', 'removeTagb' );