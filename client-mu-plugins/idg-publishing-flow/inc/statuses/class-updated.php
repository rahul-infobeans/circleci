<?php
/**
 * Hook will always expect all arguments for handle_transition
 * menthods, so ignore the following:
 * @phpcs:disable VariableAnalysis.CodeAnalysis.VariableAnalysis.UnusedVariable
 *
 * Disable the missing paramtag when expecting inheritence for docblock data.
 * @phpcs:disable Squiz.Commenting.FunctionComment.MissingParamTag
 */

namespace IDG\Publishing_Flow\Statuses;

use IDG\Publishing_Flow\Statuses\Status;
use IDG\Publishing_Flow\Statuses\Transition\Transition;
use IDG\Publishing_Flow\Statuses\Transition\Transition_Interface;

/**
 * Handles any status changes registered as "Updated".
 *
 * @inheritDoc
 */
class Updated extends Status implements Transition_Interface {
	use Transition;

	/**
	 * A nice reference name for the state.
	 *
	 * @var string
	 */
	public $name = 'updated';

	/**
	 * The label of the status.
	 *
	 * @var string
	 */
	public $label = 'Updated';

	/**
	 * The disable state for when the class is parsed
	 * for HTML <option> creation.
	 *
	 * @var boolean
	 */
	public $option_disable = true;

	/**
	 * Currently unused.
	 *
	 * @see IDG\Publishing_Flow\Statuses\Transition\Transition_Interface::handle_transition_to()
	 */
	public function handle_transition_to( \WP_Post $post, \WP_REST_Request $request, bool $creating = false ) {
	}

	/**
	 * Currently unused.
	 *
	 * @see IDG\Publishing_Flow\Statuses\Transition\Transition_Interface::handle_transition_from()
	 */
	public function handle_transition_from( \WP_Post $post, \WP_REST_Request $request, bool $creating = false ) {
	}
}
