<?php
/**
 * Assembly English language file.
 *
 */

$english = array(
	'assemblies' => 'Assemblies',
	'assemblies:assembly' => 'Assembly',
	'item:object:assembly' => 'Assemblies',
	'item:object:decission' => 'Agenda points',
	'assemblies:none' => 'No assemblies',
	'assemblies:assembly:none' => 'No assemblies',
	'assemblies:none-previous' => 'No previous assemblies',
	'assemblies:general_assembly' => 'General assembly',

	'assemblies:title:all_assemblies' => 'All site assemblies',
	'assembly:edit_general' => 'Edit defaults',

	'assembly:group' => 'Group assemblies',
	'assemblies:group' => 'Group assembly',
	'assemblies:decission:group' => 'Group minutes',
	'assemblies:enableassemblies' => 'Enable group assemblies',
	'assemblies:next' => 'Next assembly',

	// General properties
	'assemblies:assembly_location' => 'Default location',
	'assemblies:periodicity' => 'Periodicity',
	'assemblies:chat' => 'Chat url',
	'assemblies:streaming' => 'Streaming url',
	'assemblies:voip' => 'Voip url',
	'assemblies:location' => 'Default location',

	// Assembly fields
	'assemblies:assembly:title' => 'Title',
	'assemblies:assembly:description' => 'Description',
	'assemblies:assembly:date' => 'Date',
	'assemblies:assembly:location' => 'Location',
	'assemblies:assembly:category' => 'Sections',
	'assemblies:assembly:access_id' => 'Access',
	'assemblies:assembly:children' => 'Agenda',
	'assemblies:assembly:owner' => 'Created by %s',

	// Date sort menu
	'assemblies:assembly:section:all' => 'All',
	'assemblies:assembly:section:previous' => 'Upcoming',
	'assemblies:assembly:section:next' => 'Done',

	// Decissions
	'decission:add' => 'Add agenda point',
	'decission:edit' => 'Edit agenda point',
	'assemblies:decission:title' => 'Title',
	'assemblies:decission:description' => 'Goal',
	'assemblies:decission:date' => 'Date',
	'assemblies:decission:access_id' => 'Access',
	'assemblies:decission:status' => 'Status',
	'assemblies:decission:tags' => 'Tags',
	'assemblies:decission:proposal' => 'Proposal',
	'assemblies:decission:mode' => 'Class',
	'assemblies:decission:owner' => 'Proposed by %s',
	'assemblies:decission:children' => 'Proposals for this decission',
	'assemblies:decission:child' => 'Proposal',
	'assemblies:decission:none' => 'No decissions',
	'assemblies:decission:category' => 'Section',

	// modes
	'assemblies:decission:section:all' => 'All',
	'assemblies:decission:permanent' => 'Permanent',
	'assemblies:decission:conjunctural' => 'Conjunctural',
	// statuses
	'assemblies:decission:new' => 'New',
	'assemblies:decission:accepted' => 'Accepted',
	'assemblies:decission:discarded' => 'Discarded',
	'assemblies:decission:delayed' => 'Delayed',
	'assemblies:decission:new' => 'New',
	'assemblies:decission:accepted' => 'Accepted',
	'assemblies:decission:discarded' => 'Discarded',
	'assemblies:decission:delayed' => 'Delayed',
	'assemblies:decission:section:new' => 'New',
	'assemblies:decission:section:accepted' => 'Accepted',
	'assemblies:decission:section:discarded' => 'Discarded',
	'assemblies:decission:section:delayed' => 'Delayed',


	// Group widget
	'assemblies:link:view' => 'View',
	'assemblies:link:edit' => 'Edit',
	'assemblies:info' => 'Info',
	'assemblies:info:when' => 'When',
	'assemblies:info:where' => 'Where',
	'assemblies:agenda' => 'Agenda',
	'assemblies:minutes' => 'Minutes',

	// Tooltips
	'assemblies:link:view:tooltip' => 'View the currently scheduled assembly',
	'assemblies:link:edit:tooltip' => 'Edit the currently scheduled assembly',
	'assemblies:link:view:all:tooltip' => 'View all assemblies',

	// Crud
	'crud:assembly:nochildren' => 'There are no points created for this assembly',
	'crud:assembly:addchild' => 'Add',
	

	// Editing
	'assembly:add' => 'Add assembly call',
	'assembly:edit' => 'Edit assembly call',

	// messages
	'assemblies:message:saved' => 'Assembly call saved.',
	'assemblies:error:cannot_save' => 'Cannot save assembly call.',
	'assemblies:error:cannot_write_to_container' => 'Insufficient access to save assembly to group.',
	'assemblies:message:deleted_assembly' => 'Assembly deleted.',
	'assemblies:error:cannot_delete_assembly' => 'Cannot delete assembly.',
	'assemblies:error:assembly_not_found' => 'Assembly not found.',
	'assemblies:message:deleted_decission' => 'Agenda point deleted.',
	'assemblies:error:cannot_delete_decission' => 'Cannot delete agenda point.',
	'assemblies:error:decission_not_found' => 'Agenda point not found.',
	'assemblies:error:missing:title' => 'Please enter a assembly title!',
	'assemblies:error:cannot_edit' => 'This assembly may not exist or you may not have permissions to edit it.',

	// river
	'river:create:object:assembly' => '%s published an assembly call %s',
	'river:create:object:decission' => '%s published an agenda point %s',
	'river:edited:object:assembly' => '%s edited an assembly call %s',
	'river:edited:object:decission' => '%s edited an agenda point %s',
	'river:comment:object:assembly' => '%s commented on the assembly %s',
	'river:comment:object:decission' => '%s commented on the agenda point %s',

	// notifications
	'assemblies:newcall' => 'A new assembly call',
	'assemblies:notification' =>
'
%s made a new assembly call.

%s
%s

View and suggest new proposals on the new assembly call:
%s
',

	// Other
	'assemblies:decission:link' => 'Link to next assembly',
	'assemblies:decission:linked' => 'Linked proposal to the next assembly',
	'assemblies:decission:cantlink' => 'Cant link the proposal',
	'assemblies:decission:nonext' => 'There are no pending assemblies',


	// group`widget
	'assemblies:widget:description' => 'Display latest assembly calls',
	'assemblies:moreassemblies' => 'More assembly calls',
	'assemblies:numbertodisplay' => 'Number of assembly calls to display',
	'assemblies:nocalls' => 'No assembly calls',

	// user`widget
	'assemblies:assembly:numbertodisplay' => 'Max number of assemblies to display'
);

add_translation('en', $english);
