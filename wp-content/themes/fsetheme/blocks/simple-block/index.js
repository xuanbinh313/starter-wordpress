import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import './style.css';
import './editor.css';

registerBlockType('fsetheme/simple-block', {
    edit() {
        return <p className="simple-block-editor">{__('Hiển thị thời gian hiện tại (frontend)', 'simple-block')}</p>;
    },
    save() {
        return null;
    }
});
