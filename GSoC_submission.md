# GSoC Webservices 2019 Submission

This page records the progress made during Google Summer of Code program in the last three months.

## About the project

This project is a continuation of the implementation of webservices in Joomla. Webservices are the API layer that
 helps third-party developers work with a Joomla website. This can significantly improve the popularity of Joomla
  CMS, because it will help create very functional and complex integrations with sites made on Joomla.

You can view the **specification** of the project [here](https://github.com/joomla-projects/gsoc19_webservices/blob/master/manual/en-US/gsoc-2019/specification.md).

## Work done

The work I have done on this project consists of: implementing **API layers for core Joomla components** and
 **documentation**, plus the implementation of **API for Weblinks extension** and the **guideline** on how to implement it.

##

Implemented **Core Joomla APIs**:

* com_banners
* com_categories
* com_config
* com_contact
* com_content
* com_contenthistory
* com_fields
* com_installer
* com_languages
* com_menus
* com_messages
* com_modules
* com_newsfeeds
* com_plugins
* com_privacy
* com_redirect
* com_tags
* com_templates
* com_users

Code: [Pull request](https://github.com/joomla/joomla-cms/pull/26002)

The Joomla API **documentation** is available [here](https://docs.joomla.org/J4.x:Joomla_Core_APIs).

##

It was necessary to implement an **API for Joomla weblinks extension**, in order to provide a guideline on how to add
 API in a component for the community.

Code: [Pull request](https://github.com/joomla-extensions/weblinks/pull/407)

**Instructions for implementing the component** have been created and you can find them [here](https://docs.joomla.org/J4.x:Adding_an_API_to_a_Joomla_Component).

## More Work
We covered almost all the components we wanted! But two webservices remained in the work: com_finder and com_media.

To the additional task that was associated with the entity level, we did not have enough time to design a solution for it in full.

## Contribution

These are Oleksandr Samoilov’s contributions:

* [to the Joomla CMS](https://github.com/joomla-projects/gsoc19_webservices/commits/api_components?author=a-samoylov)
* [to the Weblinks extension](https://github.com/a-samoylov/weblinks/commits/webservices?author=a-samoylov)
