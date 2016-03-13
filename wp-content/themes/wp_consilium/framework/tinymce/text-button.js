(function() {
    tinymce.PluginManager.add('cshero_highlight_btn', function( editor, url ) {
        editor.addButton( 'cshero_highlight_btn', {
            text: 'CS Highlight',
            icon: false,
            type: 'menubutton',
            menu: [
                {
                    text: 'Highlight Style 1',
                    value: 'cs-highlight-style-1',
                    onclick: function() {
                        editor.insertContent('<span class="'+this.value()+'">'+tinyMCE.activeEditor.selection.getContent()+'<span>');
                    }
                },
                {
                    text: 'Highlight Style 2',
                    value: 'cs-highlight-style-2',
                    onclick: function() {
                        editor.insertContent('<span class="'+this.value()+'">'+tinyMCE.activeEditor.selection.getContent()+'<span>');
                    }
                }
           ]
        });
    });
    tinymce.PluginManager.add('cshero_quote_btn', function( editor, url ) {
        editor.addButton( 'cshero_quote_btn', {
            text: 'CS Quote',
            icon: false,
            type: 'menubutton',
            menu: [
                {
                    text: 'Quote Style 1',
                    value: 'cs-quote-style-1',
                    onclick: function() {
                        editor.insertContent('<span class="'+this.value()+'">'+tinyMCE.activeEditor.selection.getContent()+'<span>');
                    }
                },
                {
                    text: 'Quote Style 2',
                    value: 'cs-quote-style-2',
                    onclick: function() {
                        editor.insertContent('<span class="'+this.value()+'">'+tinyMCE.activeEditor.selection.getContent()+'<span>');
                    }
                },
                {
                    text: 'Quote Style 3',
                    value: 'cs-quote-style-3',
                    onclick: function() {
                        editor.insertContent('<span class="'+this.value()+'">'+tinyMCE.activeEditor.selection.getContent()+'<span>');
                    }
                }
           ]
        });
    });
    tinymce.create('tinymce.plugins.cshero_shortcode', {
        init : function(ed, url) {
            ed.addCommand('cshero_shortcode', function() {  
                tb_show("Shortcodes", url + '/cs_shortcode_popup.php?&width=630');
            });
            
            ed.addButton('cshero_shortcode', {
                title : 'shortcode',
                cmd : 'cshero_shortcode',
                image : url + '/img/shortcode.png'
            });            
        },
        createControl : function(n, cm) {
            return null;
        },
        getInfo : function() {
            return {
                longname : 'Shortcode Buttons',
                author : 'support@cmssuperheroes.com',
                authorurl : 'http://cmssuperheroes.com',
                infourl : 'http://cmssuperheroes.com',
                version : "0.1"                                                         
            };
        }
    });
    tinymce.PluginManager.add('cshero_shortcode', tinymce.plugins.cshero_shortcode);
})();