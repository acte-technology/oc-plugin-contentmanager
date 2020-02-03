# API Content Manager

## Description

Manage custom fields and output to clean JSON API ready for JS and Mobile front-ends (ReactJS, ReactNative, Angular....)


## Work in progress

This is a testing version !!!
WORK IN PROGRESS !!!


## API Routing
Check routes.php for information.

Output exemple:

```json
{
    "home": {
        "title": "My title",
        "subtitle": "Subtitle",
        "richeditor": "<h1>Title</h1>\r\n\r\n<h1>\r\n\t<br>\r\n</h1>\r\n\r\n<h3>H3</h3>\r\n\r\n<p>\r\n\t<br>\r\n</p>\r\n\r\n<p>Description.....</p>",
        "img-header": {
            "path": "http://your-site.com/storage/app/uploads/public/5e3/782/28c/5e378228c7d0d155966453.jpg",
            "thumb": "http://your-site.com/storage/app/uploads/public/5e3/782/28c/thumb_6_300_300_0_0_crop.jpg"
        },
        "pics": [
            {
                "path": "http://your-site.com/storage/app/uploads/public/5e3/782/3a8/5e37823a8694d026781559.jpg",
                "thumb": "http://your-site.com/storage/app/uploads/public/5e3/782/3a8/thumb_7_300_300_0_0_crop.jpg"
            },
            {
                "path": "http://your-site.com/storage/app/uploads/public/5e3/782/3a9/5e37823a9d738022693261.jpg",
                "thumb": "http://your-site.com/storage/app/uploads/public/5e3/782/3a9/thumb_8_300_300_0_0_crop.jpg"
            },
            {
                "path": "http://your-site.com/storage/app/uploads/public/5e3/782/3b2/5e37823b26c9d605080763.jpg",
                "thumb": "http://your-site.com/storage/app/uploads/public/5e3/782/3b2/thumb_9_300_300_0_0_crop.jpg"
            }
        ]
    },
    "socials": {
        "facebook": "https://facebook.com",
        "instagram": "https://instagram.com",
        "website": "https://acte-solutions.com"
    },
    "footer": {
        "col1": "Content column 3",
        "col2": "Content column 2",
        "col3": "Content column 3"
    }
}
```
