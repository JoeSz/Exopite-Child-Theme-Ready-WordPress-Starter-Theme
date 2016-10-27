/**
 * JavaScript Hooks and Filters
 *
 * @type {Object}
 * @link Original Idea: http://stackoverflow.com/questions/20131168/jquery-javascript-hooks/20132960#20132960
 *
 * To add a filter:
 * filter.add('modify_name', function(name){
 *     name = 'MR. ' + name;
 *    return name;
 * });
 *
 * And to apply the filters:
 * Default value if "modify_name" filter and "name" value is not exist, false, 0, null or empty
 *
 * name = filter.apply('modify_name', name, 'default-value');
 *
 * Then to add a "hook":
 * (Hook as filter without return a value)
 *
 * filter.add('modify_hook_name', function(){
 *     Your code here
 * });
 *
 *  Remove filter/"hook":
 *
 * filter.remove('modify_name');
 *
 * And to run the "hook":
 *
 * filter.apply('modify_hook_name');
 *
 *  Check if filter exist:
 *
 * if ( typeof filter !== 'undefined' ) filter.apply( 'hook-name' );
 */
var filter = {

    filters: {},

    add: function (tag, filter) {
        (this.filters[tag] || (this.filters[tag] = [])).push(filter);
    },

    apply: function (tag, val, def) {
        if(this.filters[tag]){
            var filters = this.filters[tag];
            for(var i = 0; i < filters.length; i++){
                val = filters[i](val);
            }
        } else if (def) {
            val = def;
        }
        return val;
    },

    remove: function(tag) {
        if(this.filters[tag]){
            delete this.filters[tag];
        }
    }
};
