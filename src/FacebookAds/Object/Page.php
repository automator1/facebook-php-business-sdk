<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\PageFields;
use FacebookAds\Object\Values\AdVideoContainerTypeValues;
use FacebookAds\Object\Values\AdVideoContentCategoryValues;
use FacebookAds\Object\Values\AdVideoFormattingValues;
use FacebookAds\Object\Values\AdVideoOriginalProjectionTypeValues;
use FacebookAds\Object\Values\AdVideoSwapModeValues;
use FacebookAds\Object\Values\AdVideoTypeValues;
use FacebookAds\Object\Values\AdVideoUnpublishedContentTypeValues;
use FacebookAds\Object\Values\AdVideoUploadPhaseValues;
use FacebookAds\Object\Values\EventEventStateFilterValues;
use FacebookAds\Object\Values\EventTimeFilterValues;
use FacebookAds\Object\Values\EventTypeValues;
use FacebookAds\Object\Values\InsightsResultDatePresetValues;
use FacebookAds\Object\Values\InsightsResultPeriodValues;
use FacebookAds\Object\Values\InstantArticleInsightsQueryResultBreakdownValues;
use FacebookAds\Object\Values\InstantArticleInsightsQueryResultPeriodValues;
use FacebookAds\Object\Values\LeadgenFormLocaleValues;
use FacebookAds\Object\Values\LiveVideoBroadcastStatusValues;
use FacebookAds\Object\Values\LiveVideoProjectionValues;
use FacebookAds\Object\Values\LiveVideoSourceValues;
use FacebookAds\Object\Values\LiveVideoSpatialAudioFormatValues;
use FacebookAds\Object\Values\LiveVideoStatusValues;
use FacebookAds\Object\Values\LiveVideoStereoscopicModeValues;
use FacebookAds\Object\Values\LiveVideoStreamTypeValues;
use FacebookAds\Object\Values\MediaFingerprintFingerprintContentTypeValues;
use FacebookAds\Object\Values\NativeOfferBarcodeTypeValues;
use FacebookAds\Object\Values\NativeOfferLocationTypeValues;
use FacebookAds\Object\Values\PageAttireValues;
use FacebookAds\Object\Values\PageCallToActionAndroidDestinationTypeValues;
use FacebookAds\Object\Values\PageCallToActionIphoneDestinationTypeValues;
use FacebookAds\Object\Values\PageCallToActionTypeValues;
use FacebookAds\Object\Values\PageCallToActionWebDestinationTypeValues;
use FacebookAds\Object\Values\PageDomainActionTypeValues;
use FacebookAds\Object\Values\PageFoodStylesValues;
use FacebookAds\Object\Values\PageMessagingTypeValues;
use FacebookAds\Object\Values\PageModelValues;
use FacebookAds\Object\Values\PageNotificationTypeValues;
use FacebookAds\Object\Values\PagePaymentDevModeActionValues;
use FacebookAds\Object\Values\PagePermittedTasksValues;
use FacebookAds\Object\Values\PagePostBackdatedTimeGranularityValues;
use FacebookAds\Object\Values\PagePostCheckinEntryPointValues;
use FacebookAds\Object\Values\PagePostFormattingValues;
use FacebookAds\Object\Values\PagePostPlaceAttachmentSettingValues;
use FacebookAds\Object\Values\PagePostPostSurfacesBlacklistValues;
use FacebookAds\Object\Values\PagePostPostingToRedspaceValues;
use FacebookAds\Object\Values\PagePostTargetSurfaceValues;
use FacebookAds\Object\Values\PagePostUnpublishedContentTypeValues;
use FacebookAds\Object\Values\PagePostWithValues;
use FacebookAds\Object\Values\PagePublishStatusValues;
use FacebookAds\Object\Values\PageSenderActionValues;
use FacebookAds\Object\Values\PageSettingTypeValues;
use FacebookAds\Object\Values\PageSettingValues;
use FacebookAds\Object\Values\PageSubscribedFieldsValues;
use FacebookAds\Object\Values\PageTasksValues;
use FacebookAds\Object\Values\PageThreadStateValues;
use FacebookAds\Object\Values\PageTypeValues;
use FacebookAds\Object\Values\PhotoBackdatedTimeGranularityValues;
use FacebookAds\Object\Values\PhotoTypeValues;
use FacebookAds\Object\Values\PhotoUnpublishedContentTypeValues;
use FacebookAds\Object\Values\ProfilePictureSourceTypeValues;
use FacebookAds\Object\Values\VideoCopyrightContentCategoryValues;
use FacebookAds\Object\Values\VideoCopyrightMonitoringTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class Page extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'accounts';
  }

  /**
   * @return PageFields
   */
  public static function getFieldsEnum() {
    return PageFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Attire'] = PageAttireValues::getInstance()->getValues();
    $ref_enums['FoodStyles'] = PageFoodStylesValues::getInstance()->getValues();
    $ref_enums['Setting'] = PageSettingValues::getInstance()->getValues();
    $ref_enums['PermittedTasks'] = PagePermittedTasksValues::getInstance()->getValues();
    $ref_enums['Tasks'] = PageTasksValues::getInstance()->getValues();
    $ref_enums['MessagingType'] = PageMessagingTypeValues::getInstance()->getValues();
    $ref_enums['NotificationType'] = PageNotificationTypeValues::getInstance()->getValues();
    $ref_enums['PublishStatus'] = PagePublishStatusValues::getInstance()->getValues();
    $ref_enums['SenderAction'] = PageSenderActionValues::getInstance()->getValues();
    $ref_enums['Type'] = PageTypeValues::getInstance()->getValues();
    $ref_enums['Model'] = PageModelValues::getInstance()->getValues();
    $ref_enums['SubscribedFields'] = PageSubscribedFieldsValues::getInstance()->getValues();
    $ref_enums['DomainActionType'] = PageDomainActionTypeValues::getInstance()->getValues();
    $ref_enums['PaymentDevModeAction'] = PagePaymentDevModeActionValues::getInstance()->getValues();
    $ref_enums['SettingType'] = PageSettingTypeValues::getInstance()->getValues();
    $ref_enums['ThreadState'] = PageThreadStateValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function createAdminSetting(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'setting' => 'setting_enum',
      'value' => 'bool',
    );
    $enums = array(
      'setting_enum' => PageSettingValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/admin_settings',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdsPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'exclude_dynamic_ads' => 'bool',
      'include_inline_create' => 'bool',
      'since' => 'datetime',
      'until' => 'datetime',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ads_posts',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAgencies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/agencies',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAgencies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/agencies',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAgency(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
      'permitted_tasks' => 'list<permitted_tasks_enum>',
    );
    $enums = array(
      'permitted_tasks_enum' => PagePermittedTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/agencies',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAlbums(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/albums',
      new Album(),
      'EDGE',
      Album::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAlbum(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'contributors' => 'list<int>',
      'description' => 'string',
      'is_default' => 'bool',
      'location' => 'string',
      'make_shared_album' => 'bool',
      'message' => 'string',
      'name' => 'string',
      'place' => 'Object',
      'privacy' => 'string',
      'tags' => 'list<int>',
      'visible' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/albums',
      new Album(),
      'EDGE',
      Album::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAssignedUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/assigned_users',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAssignedUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/assigned_users',
      new AssignedUser(),
      'EDGE',
      AssignedUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAssignedUser(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'tasks' => 'list<tasks_enum>',
      'user' => 'int',
    );
    $enums = array(
      'tasks_enum' => PageTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/assigned_users',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAudioMediaCopyrights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/audio_media_copyrights',
      new AudioCopyright(),
      'EDGE',
      AudioCopyright::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteBlocked(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'asid' => 'Object',
      'psid' => 'Object',
      'uid' => 'Object',
      'user' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/blocked',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBlocked(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'uid' => 'int',
      'user' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/blocked',
      new Profile(),
      'EDGE',
      Profile::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBlocked(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'asid' => 'list',
      'psid' => 'list<Object>',
      'uid' => 'list<string>',
      'user' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/blocked',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBroadcastMessage(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'custom_label_id' => 'int',
      'message_creative_id' => 'string',
      'messaging_type' => 'messaging_type_enum',
      'notification_type' => 'notification_type_enum',
      'schedule_local_time' => 'string',
      'schedule_time' => 'datetime',
      'tag' => 'Object',
      'targeting' => 'Object',
    );
    $enums = array(
      'messaging_type_enum' => PageMessagingTypeValues::getInstance()->getValues(),
      'notification_type_enum' => PageNotificationTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/broadcast_messages',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBroadcastReachEstimation(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'custom_label_id' => 'int',
      'targeting' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/broadcast_reach_estimations',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBusinessProjects(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/businessprojects',
      new BusinessProject(),
      'EDGE',
      BusinessProject::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCallToAction(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'android_app_id' => 'int',
      'android_deeplink' => 'string',
      'android_destination_type' => 'android_destination_type_enum',
      'android_package_name' => 'string',
      'android_url' => 'string',
      'email_address' => 'string',
      'intl_number_with_plus' => 'string',
      'iphone_app_id' => 'int',
      'iphone_deeplink' => 'string',
      'iphone_destination_type' => 'iphone_destination_type_enum',
      'iphone_url' => 'string',
      'type' => 'type_enum',
      'web_destination_type' => 'web_destination_type_enum',
      'web_url' => 'string',
    );
    $enums = array(
      'android_destination_type_enum' => PageCallToActionAndroidDestinationTypeValues::getInstance()->getValues(),
      'iphone_destination_type_enum' => PageCallToActionIphoneDestinationTypeValues::getInstance()->getValues(),
      'type_enum' => PageCallToActionTypeValues::getInstance()->getValues(),
      'web_destination_type_enum' => PageCallToActionWebDestinationTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/call_to_actions',
      new PageCallToAction(),
      'EDGE',
      PageCallToAction::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCanvasElement(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'canvas_button' => 'Object',
      'canvas_carousel' => 'Object',
      'canvas_footer' => 'Object',
      'canvas_header' => 'Object',
      'canvas_lead_form' => 'Object',
      'canvas_photo' => 'Object',
      'canvas_product_list' => 'Object',
      'canvas_product_set' => 'Object',
      'canvas_store_locator' => 'Object',
      'canvas_text' => 'Object',
      'canvas_video' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/canvas_elements',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCanvases(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'is_hidden' => 'bool',
      'is_published' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/canvases',
      new Canvas(),
      'EDGE',
      Canvas::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCanvase(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'background_color' => 'string',
      'body_element_ids' => 'list<string>',
      'enable_swipe_to_open' => 'bool',
      'is_hidden' => 'bool',
      'is_published' => 'bool',
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/canvases',
      new Canvas(),
      'EDGE',
      Canvas::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteClaimedUrls(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'url' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/claimed_urls',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getClaimedUrls(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/claimed_urls',
      new URL(),
      'EDGE',
      URL::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createClaimedUrl(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'url' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/claimed_urls',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getConversations(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'folder' => 'string',
      'tags' => 'list<string>',
      'user_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/conversations',
      new UnifiedThread(),
      'EDGE',
      UnifiedThread::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCopyrightManualClaim(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'action' => 'action_enum',
      'action_reason' => 'action_reason_enum',
      'countries' => 'Object',
      'match_content_type' => 'match_content_type_enum',
      'matched_asset_id' => 'string',
      'reference_asset_id' => 'string',
    );
    $enums = array(
      'action_enum' => array(
        'BLOCK',
        'CLAIM_AD_EARNINGS',
        'MANUAL_REVIEW',
        'MONITOR',
        'REQUEST_TAKEDOWN',
      ),
      'action_reason_enum' => array(
        'ARTIST_OBJECTION',
        'OBJECTIONABLE_CONTENT',
        'PREMIUM_MUSIC_VIDEO',
        'PRERELEASE_CONTENT',
        'PRODUCT_PARAMETERS',
        'RESTRICTED_CONTENT',
        'UNAUTHORIZED_COMMERCIAL_USE',
      ),
      'match_content_type_enum' => array(
        'AUDIO_ONLY',
        'VIDEO_AND_AUDIO',
        'VIDEO_ONLY',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/copyright_manual_claims',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteCopyrightWhitelistedIgPartners(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'usernames' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/copyright_whitelisted_ig_partners',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCopyrightWhitelistedIgPartner(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'usernames' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/copyright_whitelisted_ig_partners',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCopyrightWhitelistedPartners(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/copyright_whitelisted_partners',
      new Profile(),
      'EDGE',
      Profile::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCustomLabels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/custom_labels',
      new PageUserMessageThreadLabel(),
      'EDGE',
      PageUserMessageThreadLabel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCustomLabel(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/custom_labels',
      new PageUserMessageThreadLabel(),
      'EDGE',
      PageUserMessageThreadLabel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getEvents(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'event_state_filter' => 'list<event_state_filter_enum>',
      'include_canceled' => 'bool',
      'time_filter' => 'time_filter_enum',
      'type' => 'type_enum',
    );
    $enums = array(
      'event_state_filter_enum' => EventEventStateFilterValues::getInstance()->getValues(),
      'time_filter_enum' => EventTimeFilterValues::getInstance()->getValues(),
      'type_enum' => EventTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/events',
      new Event(),
      'EDGE',
      Event::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getFeed(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'include_hidden' => 'bool',
      'show_expired' => 'bool',
      'with' => 'with_enum',
    );
    $enums = array(
      'with_enum' => PagePostWithValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/feed',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createFeed(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'actions' => 'Object',
      'adaptive_type' => 'string',
      'album_id' => 'string',
      'android_key_hash' => 'string',
      'animated_effect_id' => 'unsigned int',
      'application_id' => 'string',
      'asked_fun_fact_prompt_id' => 'unsigned int',
      'asset3d_id' => 'unsigned int',
      'associated_id' => 'string',
      'attach_place_suggestion' => 'bool',
      'attached_media' => 'list<Object>',
      'audience_exp' => 'bool',
      'backdated_time' => 'datetime',
      'backdated_time_granularity' => 'backdated_time_granularity_enum',
      'call_to_action' => 'Object',
      'caption' => 'string',
      'checkin_entry_point' => 'checkin_entry_point_enum',
      'child_attachments' => 'list<Object>',
      'client_mutation_id' => 'string',
      'composer_entry_picker' => 'string',
      'composer_entry_point' => 'string',
      'composer_entry_time' => 'unsigned int',
      'composer_session_events_log' => 'string',
      'composer_session_id' => 'string',
      'composer_source_surface' => 'string',
      'composer_type' => 'string',
      'connection_class' => 'string',
      'content_attachment' => 'string',
      'coordinates' => 'Object',
      'cta_link' => 'string',
      'cta_type' => 'string',
      'description' => 'string',
      'direct_share_status' => 'unsigned int',
      'enforce_link_ownership' => 'bool',
      'expanded_height' => 'unsigned int',
      'expanded_width' => 'unsigned int',
      'feed_targeting' => 'Object',
      'formatting' => 'formatting_enum',
      'fun_fact_prompt_id' => 'unsigned int',
      'fun_fact_toastee_id' => 'unsigned int',
      'has_nickname' => 'bool',
      'height' => 'unsigned int',
      'holiday_card' => 'string',
      'home_checkin_city_id' => 'Object',
      'image_crops' => 'map',
      'implicit_with_tags' => 'list<int>',
      'instant_game_entry_point_data' => 'string',
      'ios_bundle_id' => 'string',
      'is_backout_draft' => 'bool',
      'is_boost_intended' => 'bool',
      'is_explicit_location' => 'bool',
      'is_explicit_share' => 'bool',
      'is_group_linking_post' => 'bool',
      'is_photo_container' => 'bool',
      'link' => 'string',
      'location_source_id' => 'string',
      'manual_privacy' => 'bool',
      'message' => 'string',
      'multi_share_end_card' => 'bool',
      'multi_share_optimized' => 'bool',
      'name' => 'string',
      'nectar_module' => 'string',
      'object_attachment' => 'string',
      'offer_like_post_id' => 'unsigned int',
      'og_action_type_id' => 'string',
      'og_hide_object_attachment' => 'bool',
      'og_icon_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_set_profile_badge' => 'bool',
      'og_suggestion_mechanism' => 'string',
      'page_recommendation' => 'string',
      'picture' => 'string',
      'place' => 'Object',
      'place_attachment_setting' => 'place_attachment_setting_enum',
      'place_list' => 'string',
      'place_list_data' => 'list',
      'post_surfaces_blacklist' => 'list<post_surfaces_blacklist_enum>',
      'posting_to_redspace' => 'posting_to_redspace_enum',
      'privacy' => 'string',
      'prompt_id' => 'string',
      'prompt_tracking_string' => 'string',
      'properties' => 'Object',
      'proxied_app_id' => 'string',
      'publish_event_id' => 'unsigned int',
      'published' => 'bool',
      'quote' => 'string',
      'react_mode_metadata' => 'string',
      'ref' => 'list<string>',
      'referenceable_image_ids' => 'list<string>',
      'referral_id' => 'string',
      'sales_promo_id' => 'unsigned int',
      'scheduled_publish_time' => 'datetime',
      'source' => 'string',
      'sponsor_id' => 'string',
      'sponsor_relationship' => 'unsigned int',
      'suggested_place_id' => 'Object',
      'tags' => 'list<int>',
      'target_surface' => 'target_surface_enum',
      'targeting' => 'Object',
      'text_format_metadata' => 'string',
      'text_format_preset_id' => 'string',
      'text_only_place' => 'string',
      'throwback_camera_roll_media' => 'string',
      'thumbnail' => 'file',
      'time_since_original_post' => 'unsigned int',
      'title' => 'string',
      'tracking_info' => 'string',
      'unpublished_content_type' => 'unpublished_content_type_enum',
      'user_selected_tags' => 'bool',
      'video_start_time_ms' => 'unsigned int',
      'viewer_coordinates' => 'Object',
      'width' => 'unsigned int',
    );
    $enums = array(
      'backdated_time_granularity_enum' => PagePostBackdatedTimeGranularityValues::getInstance()->getValues(),
      'checkin_entry_point_enum' => PagePostCheckinEntryPointValues::getInstance()->getValues(),
      'formatting_enum' => PagePostFormattingValues::getInstance()->getValues(),
      'place_attachment_setting_enum' => PagePostPlaceAttachmentSettingValues::getInstance()->getValues(),
      'post_surfaces_blacklist_enum' => PagePostPostSurfacesBlacklistValues::getInstance()->getValues(),
      'posting_to_redspace_enum' => PagePostPostingToRedspaceValues::getInstance()->getValues(),
      'target_surface_enum' => PagePostTargetSurfaceValues::getInstance()->getValues(),
      'unpublished_content_type_enum' => PagePostUnpublishedContentTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/feed',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getGlobalBrandChildren(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/global_brand_children',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getIndexedVideos(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/indexed_videos',
      new AdVideo(),
      'EDGE',
      AdVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInsights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'date_preset' => 'date_preset_enum',
      'metric' => 'list<Object>',
      'period' => 'period_enum',
      'show_description_from_api_doc' => 'bool',
      'since' => 'datetime',
      'until' => 'datetime',
    );
    $enums = array(
      'date_preset_enum' => InsightsResultDatePresetValues::getInstance()->getValues(),
      'period_enum' => InsightsResultPeriodValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/insights',
      new InsightsResult(),
      'EDGE',
      InsightsResult::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInsightsExports(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'data_level' => 'list<string>',
      'from_creation_date' => 'datetime',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/insights_exports',
      new PageInsightsAsyncExportRun(),
      'EDGE',
      PageInsightsAsyncExportRun::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInstagramAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/instagram_accounts',
      new InstagramUser(),
      'EDGE',
      InstagramUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInstantArticles(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'development_mode' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/instant_articles',
      new InstantArticle(),
      'EDGE',
      InstantArticle::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createInstantArticle(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'development_mode' => 'bool',
      'html_source' => 'string',
      'published' => 'bool',
      'take_live' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/instant_articles',
      new InstantArticle(),
      'EDGE',
      InstantArticle::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInstantArticlesInsights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'breakdown' => 'breakdown_enum',
      'metric' => 'list<Object>',
      'period' => 'period_enum',
      'since' => 'datetime',
      'until' => 'datetime',
    );
    $enums = array(
      'breakdown_enum' => InstantArticleInsightsQueryResultBreakdownValues::getInstance()->getValues(),
      'period_enum' => InstantArticleInsightsQueryResultPeriodValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/instant_articles_insights',
      new InstantArticleInsightsQueryResult(),
      'EDGE',
      InstantArticleInsightsQueryResult::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createInstantArticlesPublish(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'canonical_url' => 'string',
      'publish_status' => 'publish_status_enum',
    );
    $enums = array(
      'publish_status_enum' => PagePublishStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/instant_articles_publish',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLeadGenForms(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/leadgen_forms',
      new LeadgenForm(),
      'EDGE',
      LeadgenForm::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLeadGenForm(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'allow_organic_lead_retrieval' => 'bool',
      'block_display_for_non_targeted_viewer' => 'bool',
      'context_card' => 'Object',
      'cover_photo' => 'file',
      'custom_disclaimer' => 'Object',
      'follow_up_action_url' => 'string',
      'is_for_canvas' => 'bool',
      'is_optimized_for_quality' => 'bool',
      'locale' => 'locale_enum',
      'name' => 'string',
      'privacy_policy' => 'Object',
      'question_page_custom_headline' => 'string',
      'questions' => 'list<Object>',
      'thank_you_page' => 'Object',
      'tracking_parameters' => 'map',
    );
    $enums = array(
      'locale_enum' => LeadgenFormLocaleValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/leadgen_forms',
      new LeadgenForm(),
      'EDGE',
      LeadgenForm::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLikes(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'target_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/likes',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLiveEncoders(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/live_encoders',
      new LiveEncoder(),
      'EDGE',
      LiveEncoder::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLiveEncoder(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'brand' => 'string',
      'device_id' => 'string',
      'model' => 'string',
      'name' => 'string',
      'version' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/live_encoders',
      new LiveEncoder(),
      'EDGE',
      LiveEncoder::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLiveVideos(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'broadcast_status' => 'list<broadcast_status_enum>',
      'source' => 'source_enum',
    );
    $enums = array(
      'broadcast_status_enum' => LiveVideoBroadcastStatusValues::getInstance()->getValues(),
      'source_enum' => LiveVideoSourceValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/live_videos',
      new LiveVideo(),
      'EDGE',
      LiveVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLiveVideo(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'attribution_app_id' => 'string',
      'content_tags' => 'list<string>',
      'crossposting_actions' => 'list<map>',
      'custom_labels' => 'list<string>',
      'description' => 'string',
      'encoding_settings' => 'string',
      'fisheye_video_cropped' => 'bool',
      'front_z_rotation' => 'float',
      'game_show' => 'map',
      'is_audio_only' => 'bool',
      'is_spherical' => 'bool',
      'live_encoders' => 'list<string>',
      'original_fov' => 'unsigned int',
      'planned_start_time' => 'int',
      'privacy' => 'string',
      'product_items' => 'list<string>',
      'projection' => 'projection_enum',
      'published' => 'bool',
      'save_vod' => 'bool',
      'schedule_custom_profile_image' => 'file',
      'spatial_audio_format' => 'spatial_audio_format_enum',
      'status' => 'status_enum',
      'stereoscopic_mode' => 'stereoscopic_mode_enum',
      'stop_on_delete_stream' => 'bool',
      'stream_type' => 'stream_type_enum',
      'targeting' => 'Object',
      'title' => 'string',
    );
    $enums = array(
      'projection_enum' => LiveVideoProjectionValues::getInstance()->getValues(),
      'spatial_audio_format_enum' => LiveVideoSpatialAudioFormatValues::getInstance()->getValues(),
      'status_enum' => LiveVideoStatusValues::getInstance()->getValues(),
      'stereoscopic_mode_enum' => LiveVideoStereoscopicModeValues::getInstance()->getValues(),
      'stream_type_enum' => LiveVideoStreamTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/live_videos',
      new LiveVideo(),
      'EDGE',
      LiveVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteLocations(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'location_page_id' => 'string',
      'store_number' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/locations',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLocations(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/locations',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMediaFingerprint(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'fingerprint_content_type' => 'fingerprint_content_type_enum',
      'metadata' => 'list',
      'source' => 'string',
      'title' => 'string',
      'universal_content_id' => 'string',
    );
    $enums = array(
      'fingerprint_content_type_enum' => MediaFingerprintFingerprintContentTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/media_fingerprints',
      new MediaFingerprint(),
      'EDGE',
      MediaFingerprint::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMessageAttachment(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'message' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/message_attachments',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMessageCreative(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'messages' => 'list<Object>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/message_creatives',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMessage(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'message' => 'Object',
      'messaging_type' => 'messaging_type_enum',
      'notification_type' => 'notification_type_enum',
      'persona_id' => 'string',
      'recipient' => 'Object',
      'sender_action' => 'sender_action_enum',
      'tag' => 'Object',
    );
    $enums = array(
      'messaging_type_enum' => PageMessagingTypeValues::getInstance()->getValues(),
      'notification_type_enum' => PageNotificationTypeValues::getInstance()->getValues(),
      'sender_action_enum' => PageSenderActionValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/messages',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMessagingFeatureReview(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/messaging_feature_review',
      new MessagingFeatureReview(),
      'EDGE',
      MessagingFeatureReview::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMessengerAdsPageWelcomeMessages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/messenger_ads_page_welcome_messages',
      new MessengerDestinationPageWelcomeMessage(),
      'EDGE',
      MessengerDestinationPageWelcomeMessage::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMessengerCode(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'data' => 'string',
      'image_size' => 'unsigned int',
      'type' => 'type_enum',
    );
    $enums = array(
      'type_enum' => PageTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/messenger_codes',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteMessengerProfile(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'fields' => 'list<fields_enum>',
    );
    $enums = array(
      'fields_enum' => array(
        'ACCOUNT_LINKING_URL',
        'GET_STARTED',
        'GREETING',
        'HOME_URL',
        'PAYMENT_SETTINGS',
        'PERSISTENT_MENU',
        'TARGET_AUDIENCE',
        'WHITELISTED_DOMAINS',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/messenger_profile',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMessengerProfile(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/messenger_profile',
      new MessengerProfile(),
      'EDGE',
      MessengerProfile::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createMessengerProfile(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'account_linking_url' => 'string',
      'get_started' => 'Object',
      'greeting' => 'list<Object>',
      'home_url' => 'Object',
      'payment_settings' => 'Object',
      'persistent_menu' => 'list<Object>',
      'target_audience' => 'Object',
      'whitelisted_domains' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/messenger_profile',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getNativeOffers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/nativeoffers',
      new NativeOffer(),
      'EDGE',
      NativeOffer::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createNativeOffer(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'barcode_photo' => 'unsigned int',
      'barcode_type' => 'barcode_type_enum',
      'barcode_value' => 'string',
      'block_reshares' => 'bool',
      'commerce_product_item' => 'string',
      'commerce_store' => 'string',
      'commerce_store_collection' => 'string',
      'details' => 'string',
      'disable_location' => 'bool',
      'discounts' => 'list<Object>',
      'expiration_time' => 'datetime',
      'instore_code' => 'string',
      'location_type' => 'location_type_enum',
      'max_save_count' => 'unsigned int',
      'online_code' => 'string',
      'page_set_id' => 'string',
      'redemption_code' => 'string',
      'redemption_link' => 'string',
      'terms' => 'string',
      'unique_barcodes' => 'unsigned int',
      'unique_codes' => 'unsigned int',
    );
    $enums = array(
      'barcode_type_enum' => NativeOfferBarcodeTypeValues::getInstance()->getValues(),
      'location_type_enum' => NativeOfferLocationTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/nativeoffers',
      new NativeOffer(),
      'EDGE',
      NativeOffer::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createNlpConfig(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'custom_token' => 'string',
      'model' => 'model_enum',
      'n_best' => 'unsigned int',
      'nlp_enabled' => 'bool',
      'other_language_support' => 'map',
      'verbose' => 'bool',
    );
    $enums = array(
      'model_enum' => PageModelValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/nlp_configs',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPageAboutStory(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'composed_text' => 'list<map>',
      'cover_photo' => 'map',
      'entity_map' => 'list<map>',
      'is_published' => 'bool',
      'title' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/page_about_story',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPageBackedInstagramAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/page_backed_instagram_accounts',
      new InstagramUser(),
      'EDGE',
      InstagramUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPageBackedInstagramAccount(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/page_backed_instagram_accounts',
      new InstagramUser(),
      'EDGE',
      InstagramUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPassThreadControl(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'metadata' => 'string',
      'recipient' => 'Object',
      'target_app_id' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/pass_thread_control',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPersonas(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/personas',
      new Persona(),
      'EDGE',
      Persona::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPersona(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
      'profile_picture_url' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/personas',
      new Persona(),
      'EDGE',
      Persona::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPhotos(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'biz_tag_id' => 'unsigned int',
      'business_id' => 'string',
      'type' => 'type_enum',
    );
    $enums = array(
      'type_enum' => PhotoTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/photos',
      new Photo(),
      'EDGE',
      Photo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPhoto(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'aid' => 'string',
      'allow_spherical_photo' => 'bool',
      'alt_text_custom' => 'string',
      'android_key_hash' => 'string',
      'application_id' => 'string',
      'attempt' => 'unsigned int',
      'audience_exp' => 'bool',
      'backdated_time' => 'datetime',
      'backdated_time_granularity' => 'backdated_time_granularity_enum',
      'caption' => 'string',
      'composer_session_id' => 'string',
      'direct_share_status' => 'unsigned int',
      'feed_targeting' => 'Object',
      'filter_type' => 'unsigned int',
      'full_res_is_coming_later' => 'bool',
      'initial_view_heading_override_degrees' => 'unsigned int',
      'initial_view_pitch_override_degrees' => 'unsigned int',
      'initial_view_vertical_fov_override_degrees' => 'unsigned int',
      'ios_bundle_id' => 'string',
      'is_explicit_location' => 'bool',
      'is_explicit_place' => 'bool',
      'location_source_id' => 'string',
      'manual_privacy' => 'bool',
      'message' => 'string',
      'name' => 'string',
      'nectar_module' => 'string',
      'no_story' => 'bool',
      'offline_id' => 'unsigned int',
      'og_action_type_id' => 'string',
      'og_icon_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_set_profile_badge' => 'bool',
      'og_suggestion_mechanism' => 'string',
      'place' => 'Object',
      'privacy' => 'string',
      'profile_id' => 'int',
      'proxied_app_id' => 'string',
      'published' => 'bool',
      'qn' => 'string',
      'scheduled_publish_time' => 'unsigned int',
      'spherical_metadata' => 'map',
      'sponsor_id' => 'string',
      'sponsor_relationship' => 'unsigned int',
      'tags' => 'list<Object>',
      'target_id' => 'int',
      'targeting' => 'Object',
      'temporary' => 'bool',
      'time_since_original_post' => 'unsigned int',
      'uid' => 'int',
      'unpublished_content_type' => 'unpublished_content_type_enum',
      'url' => 'string',
      'user_selected_tags' => 'bool',
      'vault_image_id' => 'string',
    );
    $enums = array(
      'backdated_time_granularity_enum' => PhotoBackdatedTimeGranularityValues::getInstance()->getValues(),
      'unpublished_content_type_enum' => PhotoUnpublishedContentTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/photos',
      new Photo(),
      'EDGE',
      Photo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPicture(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'height' => 'int',
      'redirect' => 'bool',
      'type' => 'type_enum',
      'width' => 'int',
    );
    $enums = array(
      'type_enum' => ProfilePictureSourceTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/picture',
      new ProfilePictureSource(),
      'EDGE',
      ProfilePictureSource::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPicture(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'android_key_hash' => 'string',
      'caption' => 'string',
      'composer_session_id' => 'string',
      'has_umg' => 'bool',
      'height' => 'unsigned int',
      'ios_bundle_id' => 'string',
      'media_effect_ids' => 'list<int>',
      'media_effect_source_object_id' => 'int',
      'msqrd_mask_id' => 'string',
      'photo' => 'string',
      'picture' => 'string',
      'profile_pic_method' => 'string',
      'profile_pic_source' => 'string',
      'proxied_app_id' => 'int',
      'qn' => 'string',
      'reuse' => 'bool',
      'scaled_crop_rect' => 'Object',
      'set_profile_photo_shield' => 'string',
      'sticker_id' => 'int',
      'sticker_source_object_id' => 'int',
      'width' => 'unsigned int',
      'x' => 'unsigned int',
      'y' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/picture',
      new ProfilePictureSource(),
      'EDGE',
      ProfilePictureSource::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'include_hidden' => 'bool',
      'q' => 'string',
      'show_expired' => 'bool',
      'with' => 'with_enum',
    );
    $enums = array(
      'with_enum' => PagePostWithValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/posts',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPromotion(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_account_id' => 'string',
      'budget' => 'unsigned int',
      'duration' => 'string',
      'gender' => 'unsigned int',
      'geo_level' => 'string',
      'max_age' => 'unsigned int',
      'min_age' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/promotions',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPublishedPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'since' => 'datetime',
      'until' => 'datetime',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/published_posts',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createRequestThreadControl(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'metadata' => 'string',
      'recipient' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/request_thread_control',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getRtbDynamicPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/rtb_dynamic_posts',
      new RTBDynamicPost(),
      'EDGE',
      RTBDynamicPost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getScheduledPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/scheduled_posts',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSecondaryReceivers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/secondary_receivers',
      new Application(),
      'EDGE',
      Application::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSettings(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/settings',
      new PageSettings(),
      'EDGE',
      PageSettings::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createSetting(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'option' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/settings',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteSubscribedApps(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/subscribed_apps',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSubscribedApps(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/subscribed_apps',
      new Application(),
      'EDGE',
      Application::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createSubscribedApp(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'subscribed_fields' => 'list<subscribed_fields_enum>',
    );
    $enums = array(
      'subscribed_fields_enum' => PageSubscribedFieldsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/subscribed_apps',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteTabs(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'tab' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/tabs',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTabs(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'tab' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/tabs',
      new Tab(),
      'EDGE',
      Tab::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTagged(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/tagged',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createTakeThreadControl(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'metadata' => 'string',
      'recipient' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/take_thread_control',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getThreadOwner(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'recipient' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/thread_owner',
      new PageThreadOwner(),
      'EDGE',
      PageThreadOwner::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteThreadSettings(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'setting_type' => 'setting_type_enum',
      'thread_state' => 'thread_state_enum',
    );
    $enums = array(
      'setting_type_enum' => PageSettingTypeValues::getInstance()->getValues(),
      'thread_state_enum' => PageThreadStateValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/thread_settings',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createThreadSetting(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'account_linking_url' => 'string',
      'call_to_actions' => 'list<Object>',
      'domain_action_type' => 'domain_action_type_enum',
      'greeting' => 'Object',
      'payment_dev_mode_action' => 'payment_dev_mode_action_enum',
      'payment_privacy_url' => 'string',
      'payment_public_key' => 'string',
      'payment_testers' => 'list<string>',
      'setting_type' => 'setting_type_enum',
      'thread_state' => 'thread_state_enum',
      'whitelisted_domains' => 'list<string>',
    );
    $enums = array(
      'domain_action_type_enum' => PageDomainActionTypeValues::getInstance()->getValues(),
      'payment_dev_mode_action_enum' => PagePaymentDevModeActionValues::getInstance()->getValues(),
      'setting_type_enum' => PageSettingTypeValues::getInstance()->getValues(),
      'thread_state_enum' => PageThreadStateValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/thread_settings',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getThreads(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'folder' => 'string',
      'tags' => 'list<string>',
      'user_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/threads',
      new UnifiedThread(),
      'EDGE',
      UnifiedThread::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTours(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/tours',
      new EventTour(),
      'EDGE',
      EventTour::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createUnlinkAccount(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'psid' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/unlink_accounts',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createVideoCopyright(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'attribution_id' => 'string',
      'content_category' => 'content_category_enum',
      'copyright_content_id' => 'string',
      'excluded_ownership_countries' => 'list<string>',
      'excluded_ownership_segments' => 'list<Object>',
      'fingerprint_id' => 'string',
      'is_reference_disabled' => 'bool',
      'is_reference_video' => 'bool',
      'monitoring_type' => 'monitoring_type_enum',
      'ownership_countries' => 'list<string>',
      'rule_id' => 'string',
      'whitelisted_ids' => 'list<string>',
      'whitelisted_ig_user_ids' => 'list<string>',
    );
    $enums = array(
      'content_category_enum' => VideoCopyrightContentCategoryValues::getInstance()->getValues(),
      'monitoring_type_enum' => VideoCopyrightMonitoringTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/video_copyrights',
      new VideoCopyright(),
      'EDGE',
      VideoCopyright::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getVideoLists(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/video_lists',
      new VideoList(),
      'EDGE',
      VideoList::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getVideos(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'type' => 'type_enum',
    );
    $enums = array(
      'type_enum' => AdVideoTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/videos',
      new AdVideo(),
      'EDGE',
      AdVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createVideo(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_breaks' => 'list',
      'adaptive_type' => 'string',
      'animated_effect_id' => 'unsigned int',
      'application_id' => 'string',
      'asked_fun_fact_prompt_id' => 'unsigned int',
      'attribution_app_id' => 'string',
      'audio_story_wave_animation_handle' => 'string',
      'backdated_post' => 'list',
      'call_to_action' => 'Object',
      'composer_entry_picker' => 'string',
      'composer_entry_point' => 'string',
      'composer_entry_time' => 'unsigned int',
      'composer_session_events_log' => 'string',
      'composer_session_id' => 'string',
      'composer_source_surface' => 'string',
      'composer_type' => 'string',
      'container_type' => 'container_type_enum',
      'content_category' => 'content_category_enum',
      'content_tags' => 'list<string>',
      'crossposted_video_id' => 'string',
      'custom_labels' => 'list<string>',
      'description' => 'string',
      'direct_share_status' => 'unsigned int',
      'embeddable' => 'bool',
      'end_offset' => 'unsigned int',
      'expiration' => 'Object',
      'fbuploader_video_file_chunk' => 'string',
      'feed_targeting' => 'Object',
      'file_size' => 'unsigned int',
      'file_url' => 'string',
      'fisheye_video_cropped' => 'bool',
      'formatting' => 'formatting_enum',
      'fov' => 'unsigned int',
      'front_z_rotation' => 'float',
      'fun_fact_prompt_id' => 'unsigned int',
      'fun_fact_toastee_id' => 'unsigned int',
      'guide' => 'list<list<unsigned int>>',
      'guide_enabled' => 'bool',
      'has_nickname' => 'bool',
      'holiday_card' => 'string',
      'initial_heading' => 'unsigned int',
      'initial_pitch' => 'unsigned int',
      'instant_game_entry_point_data' => 'string',
      'is_boost_intended' => 'bool',
      'is_explicit_share' => 'bool',
      'is_group_linking_post' => 'bool',
      'is_voice_clip' => 'bool',
      'location_source_id' => 'string',
      'manual_privacy' => 'bool',
      'multilingual_data' => 'list<Object>',
      'no_story' => 'bool',
      'offer_like_post_id' => 'unsigned int',
      'og_action_type_id' => 'string',
      'og_icon_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_suggestion_mechanism' => 'string',
      'original_fov' => 'unsigned int',
      'original_projection_type' => 'original_projection_type_enum',
      'publish_event_id' => 'unsigned int',
      'published' => 'bool',
      'react_mode_metadata' => 'string',
      'reference_only' => 'bool',
      'referenced_sticker_id' => 'string',
      'replace_video_id' => 'string',
      'sales_promo_id' => 'unsigned int',
      'scheduled_publish_time' => 'unsigned int',
      'secret' => 'bool',
      'slideshow_spec' => 'map',
      'social_actions' => 'bool',
      'source' => 'string',
      'specified_dialect' => 'string',
      'spherical' => 'bool',
      'sponsor_id' => 'string',
      'sponsor_relationship' => 'unsigned int',
      'start_offset' => 'unsigned int',
      'swap_mode' => 'swap_mode_enum',
      'targeting' => 'Object',
      'text_format_metadata' => 'string',
      'throwback_camera_roll_media' => 'string',
      'thumb' => 'file',
      'time_since_original_post' => 'unsigned int',
      'title' => 'string',
      'transcode_setting_properties' => 'string',
      'universal_video_id' => 'string',
      'unpublished_content_type' => 'unpublished_content_type_enum',
      'upload_phase' => 'upload_phase_enum',
      'upload_session_id' => 'string',
      'upload_setting_properties' => 'string',
      'video_asset_id' => 'string',
      'video_file_chunk' => 'string',
      'video_start_time_ms' => 'unsigned int',
      'waterfall_id' => 'string',
    );
    $enums = array(
      'container_type_enum' => AdVideoContainerTypeValues::getInstance()->getValues(),
      'content_category_enum' => AdVideoContentCategoryValues::getInstance()->getValues(),
      'formatting_enum' => AdVideoFormattingValues::getInstance()->getValues(),
      'original_projection_type_enum' => AdVideoOriginalProjectionTypeValues::getInstance()->getValues(),
      'swap_mode_enum' => AdVideoSwapModeValues::getInstance()->getValues(),
      'unpublished_content_type_enum' => AdVideoUnpublishedContentTypeValues::getInstance()->getValues(),
      'upload_phase_enum' => AdVideoUploadPhaseValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/videos',
      new AdVideo(),
      'EDGE',
      AdVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getVisitorPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'include_hidden' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/visitor_posts',
      new PagePost(),
      'EDGE',
      PagePost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'account_linking_token' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new Page(),
      'NODE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'about' => 'string',
      'accept_crossposting_handshake' => 'list<map>',
      'allow_spherical_photo' => 'bool',
      'attire' => 'attire_enum',
      'begin_crossposting_handshake' => 'list<map>',
      'bio' => 'string',
      'category_list' => 'list<string>',
      'company_overview' => 'string',
      'contact_address' => 'Object',
      'cover' => 'string',
      'culinary_team' => 'string',
      'description' => 'string',
      'directed_by' => 'string',
      'displayed_message_response_time' => 'string',
      'emails' => 'list<string>',
      'focus_x' => 'float',
      'focus_y' => 'float',
      'food_styles' => 'list<food_styles_enum>',
      'general_info' => 'string',
      'general_manager' => 'string',
      'genre' => 'string',
      'hours' => 'map',
      'ignore_coordinate_warnings' => 'bool',
      'impressum' => 'string',
      'instant_articles_submit_for_review' => 'bool',
      'is_always_open' => 'bool',
      'is_permanently_closed' => 'bool',
      'is_published' => 'bool',
      'is_webhooks_subscribed' => 'bool',
      'location' => 'Object',
      'menu' => 'string',
      'mission' => 'string',
      'no_feed_story' => 'bool',
      'no_notification' => 'bool',
      'offset_x' => 'int',
      'offset_y' => 'int',
      'parking' => 'map',
      'payment_options' => 'map',
      'phone' => 'string',
      'plot_outline' => 'string',
      'price_range' => 'string',
      'public_transit' => 'string',
      'restaurant_services' => 'map',
      'restaurant_specialties' => 'map',
      'scrape' => 'bool',
      'service_details' => 'string',
      'spherical_metadata' => 'map',
      'start_info' => 'Object',
      'store_location_descriptor' => 'string',
      'website' => 'string',
      'zoom_scale_x' => 'float',
      'zoom_scale_y' => 'float',
    );
    $enums = array(
      'attire_enum' => PageAttireValues::getInstance()->getValues(),
      'food_styles_enum' => PageFoodStylesValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new Page(),
      'NODE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
